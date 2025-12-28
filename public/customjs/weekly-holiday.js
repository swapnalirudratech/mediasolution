async function addWeeklyHoliday(id = null) {
    let url = "/api/addWeeklyHoliday";
    if (id != null) {
        url += `/${id}`;
    }
    let res = await fetch(url);
    let html = await res.text();
    openMe(html);
}

async function savePayroll(ele, id = null) {
    let form = ele.parentElement.parentElement;
    // console.log(form)
    let isactive = null;

    let data = {
        day_name: form.querySelector(".day_name").value,
    };

    let url = "/api/addWeeklyHoliday";
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

async function getWeeklyHoliday() {
    let res = await fetch("/api/getWeeklyHoliday");
    let html = await res.json();
    return html;
}

async function setTable() {
    let data = await getWeeklyHoliday();
    if (data.success) {
        let body = document.getElementById("payrollTable").querySelector("tbody");
        // console.log(data);

        let html = "";
        data.data.forEach((item, i) => {
            html += `
                    <tr>
                        <td>${i + 1}</td>
                        <td>${item.day_name}</td>
                        <td>
                            <span onclick="addWeeklyHoliday(${item.id})" class="cursor-pointer text-primary" title="edit">
                                <i class="fa fa-edit fa-lg"></i>
                            </span>&nbsp;
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
