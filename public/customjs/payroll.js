async function addPayroll(id = null) {
    let url = "/api/addPayroll";
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

    let installment = 0;
    form.querySelectorAll(".installment").forEach((input) => {
        if (input.checked) {
            installment = input.value;
        }
        
    });

    let data = {
        employee: form.querySelector(".employee").value,
        amount: form.querySelector(".amount").value,
        salary_month: form.querySelector(".salary_month").value,
        payment_type: form.querySelector(".payment_type").value,
        installment: installment
    };

    let url = "/api/addPayroll";
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

async function getPayroll() {
    let res = await fetch("/api/getPayroll");
    let html = await res.json();
    return html;
}

async function setTable() {
    let salary_advance = await getPayroll();
    if (salary_advance.success) {
        let body = document.getElementById("payrollTable").querySelector("tbody");
        console.log(salary_advance);

        let html = "";
        salary_advance.data.forEach((item, i) => {
            html += `
                    <tr>
                        <td>${i + 1}</td>
                        <td>${item.name}</td>
                        <td>${item.amount}</td>
                        <td>${item.salary_month}</td>
                        <td>${item.payment_type}</td>
                        <td>
                            <span onclick="addPayroll(${item.id})" class="cursor-pointer text-primary" title="edit">
                                <i class="fa fa-edit fa-lg"></i>
                            </span>&nbsp;
                            <a onclick="return confirm('Are you sure you want to delete?')" href="/api/deleteSalaryAdvance/${item.id}/tbl_salary_advance" class="cursor-pointer text-danger" title="delete"><i class="fa fa-trash fa-lg"></i></a>
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
