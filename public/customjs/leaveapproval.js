  async function getleaveapplication() {
    let res = await fetch("/api/getleaveapplication");
    let html = await res.json();
    return html;
  }
  
  async function setTable() {
    let data = await getleaveapplication();
    if (data.success) {
      let body = document
        .getElementById("leaveapplicationTable")
        .querySelector("tbody");
      console.log(data);
  
      let html = "";
      data.data.forEach((item, i) => {
        html += `
                      <tr>
                          <td>${i + 1}</td>
                          <td>${item.name}</td>
                          <td>${item.leave_type}</td>
                          <td>${item.from_date}</td>
                          <td>${item.end_date}</td>
                          <td>${item.total_days}</td>
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
                            <div class="${
                              item.approve == 1
                                ? "bg-green-100 text-green-600"
                                : "bg-red-100 text-red-600"
                            }">
                              <span class="text-nowrap font-semibold p-2">${
                                item.approve == 1 ? "Approve" : "Pending"
                              }</span>
                            </div>
                          </td>
                          <td>
                            <div class="flex gap-2">
                              <span onclick="managerApprove(${
                                item.id
                              })" class="cursor-pointer text-success" title="edit">
                                  <i class="fa fa-square-check fa-lg"></i>
                              </span>&nbsp;
                              <a onclick="return confirm('Are you sure you want to delete ?')" href="/api/delete-leaveapplication/${
                                item.id
                              }" class="cursor-pointer text-danger"><i class="fas fa-trash fa-lg"></i></a>                      
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
  
  async function managerApprove(id = null) {
    let url = "/api/managerApprove";
    if (id != null) {
      url += `/${id}`;
    }
  
    // console.log(url);
  
    let res = await fetch(url);
    let html = await res.text();
    openMe(html);
  }
  
  async function savemanagerApprove(ele, id = null) {
    let form = ele.parentElement.parentElement;
      // console.log(form)
      let today = new Date();
      let approve_date = today.toISOString().split("T")[0];
  
      let data = {
        approve_date: approve_date,
        approve_from_date: form.querySelector(".approve_from_date").value,
        approve_end_date: form.querySelector(".approve_end_date").value,
        approve_total_days: form.querySelector(".approve_total_days").value,
        approve: 1,
      };
  
      
  
      let url = "/api/managerApprove";
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
  