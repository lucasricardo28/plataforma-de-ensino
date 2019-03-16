
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('plugins/popper/popper.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('js/jquery.slimscroll.js')}}"></script>

<!--Wave Effects -->
<script src="{{ asset('js/waves.js')}}"></script>

<!--Menu sidebar -->
<script src="{{ asset('js/sidebarmenu.js')}}"></script>

<!--stickey kit -->
<script src="{{ asset('plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>

<!--c3 JavaScript -->
<script src="{{asset('plugins/d3/d3.min.js')}}"></script>
<script src="{{asset('plugins/c3-master/c3.min.js')}}"></script>

<!--Custom JavaScript -->
<script src="{{ asset('js/custom.min.js')}}"></script>

<script src="{{ asset('plugins/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{ asset('plugins/sweetalert/jquery.sweet-alert.custom.js')}}"></script>

<!-- ITEMS MOST USED-->
<script type="text/javascript" src="{{asset('plugins/datatables/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>

<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->

<script>
    $(function () {
        $("#logout").click(function (event) {
            event.preventDefault();
            $("#logout-form").submit();
        });

        $('.dataTable').DataTable({
            "paging":   true,
            "ordering": true,
            "info":     false,
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            }
        });

        $(".remove-item").click(function (event) {
            event.preventDefault();

            Swal.fire({
                title: 'Você tem certeza?',
                text: "Você não poderá reverter isso!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Remover'
            }).then((result) => {
                if (result.value) {
                    $(this).parent("form").submit();
                }
            });
        });

        $("#birth_date").inputmask("dd/mm/yyyy");
        $("#cpf").inputmask("999.999.999.99");
        $("#phone_1").inputmask("(99) 9 9999-9999");
        $("#phone_2").inputmask("(99) 9 9999-9999");
        $("#phoneFixed").inputmask("(99) 9999-9999");
        $("#cnpj").inputmask("99.999.999/9999-99");
        $("#cep").inputmask("99.999-999");
    })
</script>

@if(session()->has('message'))
    <script>
        Swal.fire("{{ session()->get('message') }}","",'success');
    </script>
@endif
@if(session()->has('error'))
    <script>
        Swal.fire("{{ session()->get('error') }}","",'error');
    </script>
@endif

@yield('additional_script')