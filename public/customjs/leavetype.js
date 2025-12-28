async function addleavetype(id = null) {
    let url = "/api/addleavetype";
    if (id != null) {
        url += `/${id}`;
    }

    // console.log(url);

    let res = await fetch(url);
    let html = await res.text();
    openMe(html);
}

async function saveLeavetype(ele, id = null) {
    let form = ele.parentElement.parentElement;
    // console.log(form)
    let isactive = null;

    let data = {
        leave_type: form.querySelector(".leave_type").value,
        leave_code: form.querySelector(".leave_code").value,
        leave_days: form.querySelector(".leave_days").value,
    };

    

    let url = "/api/addleavetype";
    if (id != null) {
        url += `/${id}`;
    }
    // console.log(data)
    let res = await fetch(url, {
        method: "POST", // Specify the method
        headers: {
            "Content-Type": "application/json", // Set the content type to JSON
        },
        body: JSON.stringify(data), // Convert the data object to a JSON string
    });

    let html = await res.json();
    //   console.log(html)
    if (html.success) {
        toastr.success(html.message);
        // getAllAgents();
        closeMe();
        setTable();
    } else {
        toastr.error(html.message);
    }
}

async function getleavetype() {
    let res = await fetch("/api/getleavetype");
    let html = await res.json();
    return html;
}

async function setTable() {
    let data = await getleavetype();
    if (data.success) {
        let body = document.getElementById("leaveTypeTable").querySelector("tbody");
        // console.log(data);

        let html = "";
        data.data.forEach((item, i) => {
            html += `
                    <tr>
                        <td>${i + 1}</td>
                        <td>${item.leave_type}</td>
                        <td>${item.leave_code}</td>
                        <td>${item.leave_days}</td>
                        <td>
                            <span onclick="addleavetype(${item.id})" class="cursor-pointer text-primary" title="edit">
                                <i class="fa fa-edit fa-lg"></i>
                            </span>&nbsp;
                            <a onclick="return confirm('Are you sure you want to delete ?')" href="/api/delete-leavetype/${item.id}" class="cursor-pointer text-danger"><i class="fas fa-trash fa-lg"></i></a>
                        </td>
                    </tr>
              `;
        });

        body.innerHTML = html;
    } else {
        console.log("hello");
    }
}

setTable();
