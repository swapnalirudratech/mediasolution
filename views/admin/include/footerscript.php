<!-- jQuery -->
<script src="/public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/public/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/public/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/public/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/public/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/public/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/public/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/public/plugins/moment/moment.min.js"></script>
<script src="/public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Summernote -->
<script src="/public/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/public/dist/js/adminlte.js"></script>
<script src="/public/dist/js/pages/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.0/slimselect.min.js"></script>


<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.tailwindcss.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.datatables.net/buttons/3.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.html5.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

<script>
    const modalId = document.getElementById("commonModal");

    if (modalId) {
        const modal = new bootstrap.Modal(modalId);
        const modalContent = modalId.querySelector(".modal-content");

        function openMe(html) {
            modalContent.innerHTML = html;
            modal.show();
            setAllSlim(modalId)
        }

        function closeMe() {
            modal.hide();
        }
    }

    function setDateFocus() {
        $('input[type=date], input[type=time], input[type=month]').on('focus', function() {
            this.showPicker();
        });
    }

    <?php if (isset($_SESSION['err']) && !empty($_SESSION['err'])) : ?>
        console.log("Error: <?= $_SESSION['err'] ?>");
        $(document).ready(function onDocumentReady() {
            toastr.error("<?= $_SESSION['err'] ?>");
        });
        <?php unset($_SESSION['err']); ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['success']) && !empty($_SESSION['success'])) : ?>
        console.log("Error: <?= $_SESSION['success'] ?>");
        $(document).ready(function onDocumentReady() {
            toastr.success("<?= $_SESSION['success'] ?>");
        });
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['print_bill']) && !empty($_SESSION['print_bill'])) : ?>
        $(document).ready(function onDocumentReady() {
            printBill('<?= $_SESSION['print_bill'] ?>')
        });
        <?php unset($_SESSION['print_bill']); ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['print_bill_ot']) && !empty($_SESSION['print_bill_ot'])) : ?>
        $(document).ready(function onDocumentReady() {
            printBill('<?= $_SESSION['print_bill_ot'] ?>', "ot")
        });
        <?php unset($_SESSION['print_bill_ot']); ?>
    <?php endif; ?>

    function printContent(view) {

        printJS({
            printable: view,
            type: 'raw-html',
        });
    }

    async function printBill(id, from = "pos") {
        const request = await axios.post("print-bill.php", new URLSearchParams({
            "id": id,
            "getData": from
        }));

        printContent(request.data)
    }

    async function printInvoice(id) {
        const request = await axios.get(id);

        printContent(request.data)
    }



    function setAllSlim(ele = null) {

        if (ele == null) {
            ele = document
        }
        ele.querySelectorAll('select.selectElement').forEach(function(selectElement) {
            new SlimSelect({
                select: selectElement
            });
        });
    }

    function deleteRow(ele) {
        let row = ele.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
    setAllSlim();

    function timeFormat(param) {
        const timeArray = param.split(":");
        let outputTime = "";
        if (timeArray[0] > 12) {
            outputTime = `${timeArray[0] - 12}:${timeArray[1]} PM`;
        } else {
            outputTime = `${timeArray[0]}:${timeArray[1]} AM`;
        }

        return outputTime;
    }

    function convertToAMPM(time) {
        let [hours, minutes, seconds] = time.split(":");

        hours = parseInt(hours, 10);
        let ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? hours : 12; // the hour '0' should be '12'
        minutes = minutes.padStart(2, '0'); // Ensure two digits for minutes
        seconds = seconds.padStart(2, '0'); // Ensure two digits for seconds

        return `${hours}:${minutes} ${ampm}`;
    }

    function formatDate(dateString) {
        if (dateString && dateString.trim() !== "") {
            // Create a Date object from the provided date string
            const date = new Date(dateString);

            // Define options for formatting the date
            const options = {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            };

            // Format the date to the desired format: "January 05, 2024"
            const formattedDate = date.toLocaleDateString('en-US', options);

            return formattedDate;
        }
        return "";
    }

    function setSR(table) {
        // let count =1
        console.log(table)
        table.querySelectorAll(".sr").forEach((tr, i) => {
            tr.innerText = i + 1
        })
    }

    setDateFocus();

    let dataTableInstance = new DataTable('#example', {
        layout: {
            topStart: {
                buttons: [{
                        extend: 'copy',
                        title: '', // Removes "Exported data"
                        messageTop: '',
                        exportOptions: {
                            columns: ':not(:last-child)' // Excludes the last column
                        }
                    },
                    {
                        extend: 'excel',
                        title: '', // Removes "Exported data"
                        messageTop: '',
                        exportOptions: {
                            columns: ':not(:last-child)'
                        }
                    },
                    {
                        extend: 'pdf',
                        title: '', // Removes "Exported data"
                        messageTop: '',
                        exportOptions: {
                            columns: ':not(:last-child)'
                        }
                    },
                    {
                        extend: 'print',
                        title: '', // Removes "Exported data"
                        messageTop: '',
                        exportOptions: {
                            columns: ':not(:last-child)'
                        }
                    }
                ]
            }
        },
        paging: false,
        scrollX: false,
        info: false,
        padding: 'none'
    });
</script>