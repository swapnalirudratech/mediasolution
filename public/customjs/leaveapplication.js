async function addleaveapplication(id = null) {
  let url = "/api/addleaveapplication";
  if (id != null) {
    url += `/${id}`;
  }

  // console.log(url);

  let res = await fetch(url);
  let html = await res.text();
  openMe(html);
  setDateFocus();
}

async function saveLeavetype(ele, id = null) {
  let form = ele.closest("form"); // Find the closest form element
  const formData = new FormData(form); // Create FormData (supports files)

  // console.log("Form Data:", [...formData.entries()]); // Log FormData

  let url = "/api/addleaveapplication";
  if (id != null) {
    url += `/${id}`;
  }

  let res = await fetch(url, {
    method: "POST",
    body: formData, // Send FormData directly
  });

  let html = await res.json();
  // console.log(html);

  if (html.success) {
    toastr.success(html.message);
    closeMe();
    setTable();
  } else {
    toastr.error(html.message);
  }
}

async function getleaveapplication() {
  let res = await fetch("/api/getleaveapplication");
  let html = await res.json();
  return html;
}

async function setTable() {
  let data = await getleaveapplication();

  // console.log(data);

  if (data.success) {
    let body = document
      .getElementById("leaveapplicationTable")
      .querySelector("tbody");
    console.log(data);

    let html = "";
    data.data.forEach((item, i) => {
      let test = "";
      let edit = "";
      let status = "";

      if (data.show && item.approve == 0) {
        test = `
          <span onclick="hrApprove(${item.id})" class="cursor-pointer text-success" title="edit">
              <i class="fa fa-square-check fa-lg"></i>
          </span>
        `;
      } else {
        test = `
          <span class="cursor-pointer text-success w-4">
          </span>
        `;
      }

      if (data.show ) {
        edit = `
          <span class="cursor-pointer text-success w-4">
          </span>
        `;
      } else {
        edit = `
          <span onclick="addleaveapplication(${item.id})" class="cursor-pointer text-primary" title="edit">
              <i class="fa fa-edit fa-lg"></i>
          </span>&nbsp;
          <a onclick="return confirm('Are you sure you want to delete ?')" href="/api/delete-leaveapplication/${
            item.id
          }" class="cursor-pointer text-danger"><i class="fas fa-trash fa-lg"></i></a> 
        `;
      }

      
      if (item.approve == 1) {
        status = `
          <div class="rounded-pill px-3 w-fit shadow bg-green-50 text-green-600 font-semibold">Approved</div>
        `;
      } else if (item.approve == 2) {
        status = `
          <div class="rounded-pill px-3 w-fit shadow bg-red-50 text-red-600 font-semibold">Rejected</div>
        `;
      } else {
        status = `
          <div class="rounded-pill px-3 w-fit shadow bg-yellow-50 text-yellow-600 font-semibold">Pending</div>
        `;
      }

      html += `
                    <tr>
                        <td>${i + 1}</td>
                        <td>${item.name}</td>
                        <td>${item.leave_type}</td>
                        <td>${item.from_date}</td>
                        <td>${item.end_date}</td>
                        <td>${item.total_days}</td>
                        <td>${item.reason}</td>
                        <td>${item.approve_date ? item.approve_date : ""}</td>
                        <td>${
                          item.approve_from_date ? item.approve_from_date : ""
                        }</td>
                        <td>${
                          item.approve_end_date ? item.approve_end_date : ""
                        }</td>
                        <td>${
                          item.approve_total_days ? item.approve_total_days : ""
                        }</td>
                        <td>
                            <div>
                                ${
                                  item.application
                                    ? `<a href="/${item.application}" target="_blank" class="cursor-pointer text-primary"><i class="fa fa-eye fa-lg"></i></a>`
                                    : `<span class="text-secondary"><i class="fa fa-eye fa-lg"></i></span>`
                                }
                            </div>
                        </td>
                        <td>
                            <div class="">
                              ${status}
                            </div>
                        </td>
                        <td>
                          <div class="flex gap-2 ${
                            item.approve == 1 || item.approve == 2 ? "hidden" : ""
                          }">
                          ${test}&nbsp;
                          ${edit}                     
                          </div>
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

async function hrApprove(id = null) {
  let url = "/api/hrApprove";
  if (id != null) {
    url += `/${id}`;
  }

  // console.log(url);

  let res = await fetch(url);
  let html = await res.text();
  openMe(html);
}

async function saveHRApprove(ele, id = null, type = null) {
  let form = ele.parentElement.parentElement;
  console.log(form);
  let today = new Date();
  let approve_date = today.toISOString().split("T")[0];

  let data = {};
  if (type == "approved") {
    data = {
      approve_date: approve_date,
      approve_from_date: form.querySelector(".approve_from_date").value,
      approve_end_date: form.querySelector(".approve_end_date").value,
      approve_total_days: form.querySelector(".approve_total_days").value,
      approve: 1,
    };
  } else if (type == "rejected") {
    data = {
      approve: 2,
    };
  }


  let url = "/api/hrApprove";
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
  // console.log(html);

  if (html.success) {
    toastr.success(html.message);
    closeMe();
    setTable();
  } else {
    toastr.error(html.message);
  }
}
