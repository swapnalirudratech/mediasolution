async function addholiday(id = null) {
    let url = "/api/addholiday";
    if (id != null) {
        url += `/${id}`;
    }

    // console.log(url);

    let res = await fetch(url);
    let html = await res.text();
    openMe(html);
}

async function saveHoliday(ele, id = null) {
    let form = ele.parentElement.parentElement;
    // console.log(form)
    let isactive = null;

    let data = {
        holiday_name: form.querySelector(".holiday_name").value,
        from_date: form.querySelector(".from_date").value,
        end_date: form.querySelector(".end_date").value,
        total_days: form.querySelector(".total_days").value,
    };

    let url = "/api/addholiday";
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

async function getholiday() {
    let res = await fetch("/api/getholiday");
    let html = await res.json();
    return html;
}

async function setTable() {
    let data = await getholiday();
    if (data.success) {
        let body = document.getElementById("holidayTable").querySelector("tbody");
        // console.log(data);

        let html = "";
        data.data.forEach((item, i) => {
            html += `
                    <tr>
                        <td>${i + 1}</td>
                        <td>${item.holiday_name}</td>
                        <td>${item.from_date}</td>
                        <td>${item.end_date}</td>
                        <td>${item.total_days}</td>
                        <td>
                            <span onclick="addholiday(${item.id})" class="cursor-pointer text-primary" title="edit">
                                <i class="fa fa-edit fa-lg"></i>
                            </span>&nbsp;
                            <a onclick="return confirm('Are you sure you want to delete ?')" href="/api/delete-holiday/${item.id}" class="cursor-pointer text-danger"><i class="fas fa-trash fa-lg"></i></a>
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
