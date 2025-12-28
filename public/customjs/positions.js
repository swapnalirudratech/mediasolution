async function addPosition(id = null) {
    let url = "/api/addPosition";
    if (id != null) {
        url += `/${id}`;
    }
    let res = await fetch(url);
    let html = await res.text();
    openMe(html);
}

async function savePosition(ele, id = null) {
    let form = ele.parentElement.parentElement;
    // console.log(form)
    let data = {
        position_name: form.querySelector(".position_name").value,
        position_detail: form.querySelector(".position_detail").value,
    };

    let url = "/api/addPosition";
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

async function getPositions() {
    let res = await fetch("/api/getPositions");
    let html = await res.json();
    return html;
}

async function setTable() {
    let positions = await getPositions();
    if (positions.success) {
        let body = document.getElementById("positionTable").querySelector("tbody");
        console.log(positions);
        // console.log(agents)
        let html = "";
        positions.data.forEach((position, i) => {
            html += `
                    <tr>
                        <td>${i + 1}</td>
                        <td>${position.position_name}</td>
                        <td>${position.position_detail}</td>
                        <td>
                            <span onclick="addPosition(${position.id})" class="cursor-pointer text-primary" title="edit">
                                <i class="fa fa-edit fa-lg"></i>
                            </span>&nbsp;
                            <a onclick="return confirm('Are you sure you want to delete?')" href="/api/deletePosition/${position.id}" class="cursor-pointer text-danger" title="delete"><i class="fa fa-trash fa-lg"></i></a>
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
