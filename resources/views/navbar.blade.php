@if (Session::get('error'))
    <div id="error" class="alert alert-danger m-0" style="display: none" role="alert">
        {{ Session::get('error') }}
    </div>
    <script>
        eval(function(p, a, c, k, e, r) {
            e = String;
            if (!''.replace(/^/, String)) {
                while (c--) r[c] = k[c] || c;
                k = [function(e) {
                    return r[e]
                }];
                e = function() {
                    return '\\w+'
                };
                c = 1
            };
            while (c--)
                if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
            return p
        }('$(\'#0\').1();2(3(){$(\'#0\').4()},5);', 6, 6, 'error|slideDown|setTimeout|function|slideUp|2000'
            .split('|'), 0, {}))

    </script>
@endif
@if (!session()->has('user'))
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <form action="/login" method="post">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="email" name="email" id="defaultForm-email" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input type="password" name="password" id="defaultForm-pass" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-danger">Login</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <nav class="navbar navbar-expand-sm navbar-light" style="background-color: rgb(255, 111, 97);">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="#">Kenapa Pendekin?</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-white" data-toggle="modal" data-target="#modalLoginForm" href="#">Login</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-white" href="#">Register</a>
            </li>
        </ul>
    </nav>
@else
    <nav class="navbar navbar-expand-sm navbar-light" style="background-color: rgb(255, 111, 97);">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="#">Kenapa Pendekin?</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-white" href="#">Profile</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-white" href="/logout">Logout</a>
            </li>
        </ul>
    </nav>
@endif
