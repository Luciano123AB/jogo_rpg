@php

    $alerta = session("alerta");
    $pagina = $alerta["pagina"] ?? null;

    $chaveLancado = "alerta_{$pagina}_lancado";
@endphp

@if($alerta && !session()->has($chaveLancado))
    <script>
        Swal.fire({
            position: "center",
            draggable: true,
            showCloseButton: true,
            showConfirmButton: false,
            theme: "dark",
            background: "{{ session('tema') == 'escuro' ? '#f8f9fa' : '#323232' }}",
            imageUrl: "{{ asset('assets/images/icone.png') }}",
            imageHeight: 150,
            title: "<label class='d-grid gap-3 py-2'><span class='{{ session('tema') == 'escuro' ? 'titulo_escuro cor_fonte_escuro' : 'titulo_claro cor_fonte_claro' }}'>{{ session('alerta.titulo') }}</span><span class='{{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }} fs-5'>{{ session('alerta.texto') }}</span></label>",
            footer: "<button style='--bs-icon-link-transform: translate3d(0, -.125rem, 0); border-color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }};' id='ok' class='cursor sombra botoes animate__animated animate__fadeIn btn {{ session('tema') == 'escuro' ? 'btn-secondary' : 'btn-danger' }} btn-sm rounded-pill'><i style='color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }};' id='ok' class='cursor bi bi-check-circle-fill'></i><span style='color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }}' id='ok' class='cursor'> OK</span></button>",
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

    @php
        session([$chaveLancado => true]);
    @endphp
@endif

@if(session("alerta_confirmar"))
    <script>
        Swal.fire({
            position: "center",
            draggable: true,
            showCloseButton: true,
            showConfirmButton: false,
            theme: "dark",
            background: "{{ session('tema') == 'escuro' ? '#f8f9fa' : '#323232' }}",
            imageUrl: "{{ asset('assets/images/icone.png') }}",
            imageHeight: 150,
            title: "<label class='d-grid gap-3 py-2'><span class='{{ session('tema') == 'escuro' ? 'titulo_escuro cor_fonte_escuro' : 'titulo_claro cor_fonte_claro' }}'>{{ session('alerta_confirmar.titulo') }}</span><span class='{{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }} fs-5'>{{ session('alerta_confirmar.texto') }}</span></label>",
            footer: "<div class='d-flex gap-2'><a href='{{ route(session('alerta_confirmar.cancelar')) }}' style='--bs-icon-link-transform: translate3d(0, -.125rem, 0); border-color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }};' id='ok' class='cursor sombra botoes animate__animated animate__fadeIn btn btn-danger btn-sm rounded'><i style='color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }};' class='cursor bi bi-x-circle-fill'></i><span style='color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }}' class='cursor'> CANCELAR</span></a><a href='{{ route(session('alerta_confirmar.sim')) }}' style='--bs-icon-link-transform: translate3d(0, -.125rem, 0); border-color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }};' class='cursor sombra botoes animate__animated animate__fadeIn btn btn-success btn-sm rounded'><i style='color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }};' class='cursor bi bi-check-circle-fill'></i><span style='color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }}' class='cursor'> SIM</span></a></div>",
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
@endif

@if(session("alerta_sucesso"))
    <script>
        Swal.fire({
            position: "center",
            draggable: true,
            showCloseButton: true,
            showConfirmButton: false,
            theme: "dark",
            background: "{{ session('tema') == 'escuro' ? '#f8f9fa' : '#323232' }}",
            imageUrl: "{{ asset('assets/images/icone.png') }}",
            imageHeight: 150,
            title: "<label class='d-grid gap-3 py-2'><span class='{{ session('tema') == 'escuro' ? 'titulo_escuro cor_fonte_escuro' : 'titulo_claro cor_fonte_claro' }}'>{{ session('alerta_sucesso.titulo') }}</span><span class='{{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }} fs-5'>{{ session('alerta_sucesso.texto') }}</span></label>",
            footer: "<button style='--bs-icon-link-transform: translate3d(0, -.125rem, 0); border-color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }};' id='ok' class='cursor sombra botoes animate__animated animate__fadeIn btn {{ session('tema') == 'escuro' ? 'btn-secondary' : 'btn-danger' }} btn-sm rounded-pill'><i style='color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }};' id='ok' class='cursor bi bi-check-circle-fill'></i><span style='color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }}' id='ok' class='cursor'> OK</span></button>",
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
    
    {{ session()->forget("alerta_sucesso") }}
@endif

@if(session("alerta_erro"))
    <script>
        Swal.fire({
            position: "center",
            draggable: true,
            showCloseButton: true,
            showConfirmButton: false,
            theme: "dark",
            background: "{{ session('tema') == 'escuro' ? '#f8f9fa' : '#323232' }}",
            imageUrl: "{{ asset('assets/images/icone.png') }}",
            imageHeight: 150,
            title: "<label class='d-grid gap-3 py-2'><span class='{{ session('tema') == 'escuro' ? 'titulo_escuro cor_fonte_escuro' : 'titulo_claro cor_fonte_claro' }}'>{{ session('alerta_erro.titulo') }}</span><span class='{{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }} fs-5'>{{ session('alerta_erro.texto') }}</span></label>",
            footer: "<button style='--bs-icon-link-transform: translate3d(0, -.125rem, 0); border-color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }};' id='ok' class='cursor sombra botoes animate__animated animate__fadeIn btn {{ session('tema') == 'escuro' ? 'btn-secondary' : 'btn-danger' }} btn-sm rounded-pill'><i style='color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }};' class='cursor bi bi-check-circle-fill'></i><span style='color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }}' class='cursor'> OK</span></button>",
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
    
    {{ session()->forget("alerta_erro") }}
@endif