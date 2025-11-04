@if(session("alerta_home") && !session("alerta_home_lancado"))
    <script>
        Swal.fire({
            position: "center",
            draggable: true,
            showCloseButton: true,
            showConfirmButton: false,
            theme: "dark",
            background: "#323232",
            imageUrl: "{{ asset('assets/images/icone.png') }}",
            imageHeight: 150,
            title: "<label class='d-grid gap-3 py-2'><span class='titulo cor_fonte'>{{ session('alerta_home.titulo') }}</span><span class='cor_fonte fs-5'>{{ session('alerta_home.texto') }}</span></label>",
            footer: "<button style='--bs-icon-link-transform: translate3d(0, -.125rem, 0); border-color: #e5a350;' id='ok' class='botoes btn btn-danger btn-sm rounded-pill icon-link icon-link-hover'><svg xmlns='{{ asset('http://www.w3.org/2000/svg') }}' style='color: #e5a350;' width='16' height='16' fill='currentColor' class='bi bi-check-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16'/><path d='m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05'/></svg><span style='color: #e5a350'>OK</span></button>",
            showClass: {
                popup: `
                    animate__animated
                    animate__fadeInUp
                    animate__faster
                `
            },
            hideClass: {
                popup: `
                    animate__animated
                    animate__fadeOutDown
                    animate__faster
                `
            },
            backdrop: `
                rgba(0, 0, 0, 0.4)
                url("/images/nyan-cat.gif")
                left top
                no-repeat
            `,
        });
    </script>

    {{ session(["alerta_home_lancado" => true]) }}
@endif

@if(session("alerta_sobre") && !session("alerta_sobre_lancado"))
    <script>
        Swal.fire({
            position: "center",
            draggable: true,
            showCloseButton: true,
            showConfirmButton: false,
            theme: "dark",
            background: "#323232",
            imageUrl: "{{ asset('assets/images/icone.png') }}",
            imageHeight: 150,
            title: "<label class='d-grid gap-3 py-2'><span class='titulo cor_fonte'>{{ session('alerta_sobre.titulo') }}</span><span class='cor_fonte fs-5'>{{ session('alerta_sobre.texto') }}</span></label>",
            footer: "<button style='--bs-icon-link-transform: translate3d(0, -.125rem, 0); border-color: #e5a350;' id='ok' class='botoes btn btn-danger btn-sm rounded-pill icon-link icon-link-hover'><svg xmlns='{{ asset('http://www.w3.org/2000/svg') }}' style='color: #e5a350;' width='16' height='16' fill='currentColor' class='bi bi-check-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16'/><path d='m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05'/></svg><span style='color: #e5a350'>OK</span></button>",
            showClass: {
                popup: `
                    animate__animated
                    animate__fadeInUp
                    animate__faster
                `
            },
            hideClass: {
                popup: `
                    animate__animated
                    animate__fadeOutDown
                    animate__faster
                `
            },
            backdrop: `
                rgba(0, 0, 0, 0.4)
                url("/images/nyan-cat.gif")
                left top
                no-repeat
            `,
        });
    </script>
    
    {{ session(["alerta_sobre_lancado" => true]) }}
@endif