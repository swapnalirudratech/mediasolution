async function addAttendence(id = null) {
  let url = "/api/addAttendence";
  if (id != null) {
    url += `/${id}`;
  }
  let res = await fetch(url);
  let html = await res.text();
  openMe(html);
  setDateFocus();
}

function getEmpData(ele) {

  let departmentId = ele.options[ele.selectedIndex].dataset.department; // Get department ID
  let departmentSelect = document.querySelector(".department"); // Select department dropdown

  
}

async function saveAttendence(ele, id = null) {
  let form = ele.parentElement.parentElement;
  // console.log(form)
  let data = {
    employee: form.querySelector(".employee").value,
    department: form.querySelector(".department").value,
    date: form.querySelector(".date").value,
    check_in: form.querySelector(".check_in").value,
    check_out: form.querySelector(".check_out").value,
    half_day: form.querySelector(".half_day").checked ? 1 : 0,
    late: form.querySelector(".late").checked ? 1 : 0,
  };

  // if (data.check_in == "") {
  //   return toastr.error("Check In Time is required");
  // }

  // if (data.check_out == "") {
  //   return toastr.error("Check Out Time is required");
  // }

  let url = "/api/addAttendence";
  if (id != null) {
    url += `/${id}`;
  }

  console.log(data);

  let res = await fetch(url, {
    method: "POST", // Specify the method
    headers: {
      "Content-Type": "application/json", // Set the content type to JSON
    },
    body: JSON.stringify(data), // Convert the data object to a JSON string
  });

  let html = await res.json();
    console.log(html)
  if (html.success) {
    toastr.success(html.message);
    // getAllAgents();
    closeMe();
    setTable();
  } else {
    toastr.error(html.message);
  }
}

async function getAllAttendence() {
  let res = await fetch("/api/getAttendence");
  let html = await res.json();
  return html;
}

async function setTable() {
  // let data = await getAllAttendence();
  // if (data.success) {
  //   let body = document
  //     .getElementById("AttendenceTable")
  //     .querySelector("tbody");
  //   console.log(data);
  //   // console.log(agents)
  //   let html = "";
  //   data.data.forEach((item, i) => {
  //     html += `
  //                 <tr>
  //                     <td>${i + 1}</td>
  //                     <td>${item.item}</td>
  //                     <td>${item.item_name}</td>
  //                     <td>${item.module_name}</td>
  //                     <td>
  //                         <span onclick="addAttendence(${
  //                           item.id
  //                         })" class="cursor-pointer text-primary" title="edit"><i
  //                                                         class="fa fa-edit fa-lg"></i></span>&nbsp;
  //                     </td>
  //                 </tr>
  //             `;
  //   });

  //   body.innerHTML = html;
  // } else {
  //   console.log("hello");
  // }
}

setTable();
