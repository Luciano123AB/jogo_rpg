@if(session("alerta_home") && !session("alerta_home_lancado"))
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
            title: "<label class='d-grid gap-3 py-2'><span class='{{ session('tema') == 'escuro' ? 'titulo_escuro' : 'titulo_claro' }} {{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }}'>{{ session('alerta_home.titulo') }}</span><span class='{{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }} fs-5'>{{ session('alerta_home.texto') }}</span></label>",
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
            background: "{{ session('tema') == 'escuro' ? '#f8f9fa' : '#323232' }}",
            imageUrl: "{{ asset('assets/images/icone.png') }}",
            imageHeight: 150,
            title: "<label class='d-grid gap-3 py-2'><span class='{{ session('tema') == 'escuro' ? 'titulo_escuro' : 'titulo_claro' }} {{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }}'>{{ session('alerta_sobre.titulo') }}</span><span class='{{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }} fs-5'>{{ session('alerta_sobre.texto') }}</span></label>",
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
    
    {{ session(["alerta_sobre_lancado" => true]) }}
@endif

@if(session("alerta_creditos") && !session("alerta_creditos_lancado"))
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
            title: "<label class='d-grid gap-3 py-2'><span class='{{ session('tema') == 'escuro' ? 'titulo_escuro' : 'titulo_claro' }} {{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }}'>{{ session('alerta_creditos.titulo') }}</span><span class='{{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }} fs-5'>{{ session('alerta_creditos.texto') }}</span></label>",
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

    {{ session(["alerta_creditos_lancado" => true]) }}
@endif

@if(session("alerta_regras") && !session("alerta_regras_lancado"))
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
            title: "<label class='d-grid gap-3 py-2'><span class='{{ session('tema') == 'escuro' ? 'titulo_escuro' : 'titulo_claro' }} {{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }}'>{{ session('alerta_regras.titulo') }}</span><span class='{{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }} fs-5'>{{ session('alerta_regras.texto') }}</span></label>",
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

    {{ session(["alerta_regras_lancado" => true]) }}
@endif

@if(session("alerta_cadastro") && !session("alerta_cadastro_lancado"))
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
            title: "<label class='d-grid gap-3 py-2'><span class='{{ session('tema') == 'escuro' ? 'titulo_escuro' : 'titulo_claro' }} {{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }}'>{{ session('alerta_cadastro.titulo') }}</span><span class='{{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }} fs-5'>{{ session('alerta_cadastro.texto') }}</span></label>",
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

    {{ session(["alerta_cadastro_lancado" => true]) }}
@endif

@if(session("alerta_cadastro_sucesso"))
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
            title: "<label class='d-grid gap-3 py-2'><span class='{{ session('tema') == 'escuro' ? 'titulo_escuro' : 'titulo_claro' }} {{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }}'>{{ session('alerta_cadastro_sucesso.titulo') }}</span><span class='{{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }} fs-5'>{{ session('alerta_cadastro_sucesso.texto') }}</span></label>",
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

    {{ session()->forget("alerta_cadastro_sucesso") }}
@endif

@if(session("alerta_login_sucesso"))
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
            title: "<label class='d-grid gap-3 py-2'><span class='{{ session('tema') == 'escuro' ? 'titulo_escuro' : 'titulo_claro' }} {{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }}'>{{ session('alerta_login_sucesso.titulo') }}</span><span class='{{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }} fs-5'>{{ session('alerta_login_sucesso.texto') }}</span></label>",
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

    {{ session()->forget("alerta_login_sucesso") }}
@endif

@if(session("alerta_confirmar_sair"))
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
            title: "<label class='d-grid gap-3 py-2'><span class='{{ session('tema') == 'escuro' ? 'titulo_escuro' : 'titulo_claro' }} {{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }}'>{{ session('alerta_confirmar_sair.titulo') }}</span><span class='{{ session('tema') == 'escuro' ? 'cor_fonte_escuro' : 'cor_fonte_claro' }} fs-5'>{{ session('alerta_confirmar_sair.texto') }}</span></label>",
            footer: "<div class='d-flex gap-2'><button style='--bs-icon-link-transform: translate3d(0, -.125rem, 0); border-color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }};' id='ok' class='cursor sombra botoes animate__animated animate__fadeIn btn btn-danger btn-sm rounded'><i style='color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }};' class='cursor bi bi-check-circle-fill'></i><span style='color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }}' class='cursor'> CANCELAR</span></button><a href='{{ route('sair') }}' style='--bs-icon-link-transform: translate3d(0, -.125rem, 0); border-color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }};' class='cursor sombra botoes animate__animated animate__fadeIn btn btn-success btn-sm rounded'><i style='color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }};' class='cursor bi bi-check-circle-fill'></i><span style='color: {{ session('tema') == 'escuro' ? '#493722' : '#e5a350' }}' class='cursor'> SIM</span></a></div>",
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

    {{ session()->forget("alerta_confirmar_sair") }}
@endif