async function addDepartment(id = null) {
    let url = "/api/addDepartment";
    if (id != null) {
        url += `/${id}`;
    }
    let res = await fetch(url);
    let html = await res.text();
    openMe(html);
}

async function saveDepartment(ele, id = null) {
    let form = ele.parentElement.parentElement;
    // console.log(form)
    let data = {
        department_name: form.querySelector(".department_name").value,
    };

    let url = "/api/addDepartment";
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

async function getDepartment() {
    let res = await fetch("/api/getDepartments");
    let html = await res.json();
    return html;
}

async function setTable() {
    let departments = await getDepartment();
    if (departments.success) {
        let body = document.getElementById("departmentTable").querySelector("tbody");
        console.log(departments);

        let html = "";
        departments.data.forEach((department, i) => {
            html += `
                    <tr>
                        <td>${i + 1}</td>
                        <td>${department.department_name}</td>
                        <td>
                            <span onclick="addDepartment(${department.id})" class="cursor-pointer text-primary" title="edit">
                                <i class="fa fa-edit fa-lg"></i>
                            </span>&nbsp;
                            <a onclick="return confirm('Are you sure you want to delete?')" href="/api/deleteDepartment/${department.id}" class="cursor-pointer text-danger" title="delete"><i class="fa fa-trash fa-lg"></i></a>
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
