async function addDesignations(id = null) {
    let url = "/api/addDesignations";
    if (id != null) {
        url += `/${id}`;
    }
    let res = await fetch(url);
    let html = await res.text();
    openMe(html);
}

async function saveDesignation(ele, id = null) {
    let form = ele.parentElement.parentElement;
    // console.log(form)
    let data = {
        designation: form.querySelector(".designation").value,
    };

    let url = "/api/addDesignations";
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

async function getDesignations() {
    let res = await fetch("/api/getDesignations");
    let html = await res.json();
    return html;
}

async function setTable() {
    let data = await getDesignations();
    if (data.success) {
        let body = document.getElementById("DesignationsTable").querySelector("tbody");
        console.log(data);

        let html = "";
        data.data.forEach((items, i) => {
            html += `
                    <tr>
                        <td>${i + 1}</td>
                        <td>${items.designation}</td>
                        <td>
                            <span onclick="addDesignations(${items.id})" class="cursor-pointer text-primary" title="edit">
                                <i class="fa fa-edit fa-lg"></i>
                            </span>&nbsp;
                            <a onclick="return confirm('Are you sure you want to delete?')" href="/api/deleteDesignations/${items.id}" class="cursor-pointer text-danger" title="delete"><i class="fa fa-trash fa-lg"></i></a>
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
