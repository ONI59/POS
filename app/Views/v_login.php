<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>E-Kasir | Log in</title>

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

      <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">

      <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

      <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css?v=3.2.0">
      <script nonce="a8dbe976-abfc-404c-85c9-dc0884c76161">
            try {
                  (function(w, d) {
                        ! function(U, V, W, X) {
                              U[W] = U[W] || {};
                              U[W].executed = [];
                              U.zaraz = {
                                    deferred: [],
                                    listeners: []
                              };
                              U.zaraz._v = "5705";
                              U.zaraz.q = [];
                              U.zaraz._f = function(Y) {
                                    return async function() {
                                          var Z = Array.prototype.slice.call(arguments);
                                          U.zaraz.q.push({
                                                m: Y,
                                                a: Z
                                          })
                                    }
                              };
                              for (const $ of ["track", "set", "debug"]) U.zaraz[$] = U.zaraz._f($);
                              U.zaraz.init = () => {
                                    var ba = V.getElementsByTagName(X)[0],
                                          bb = V.createElement(X),
                                          bc = V.getElementsByTagName("title")[0];
                                    bc && (U[W].t = V.getElementsByTagName("title")[0].text);
                                    U[W].x = Math.random();
                                    U[W].w = U.screen.width;
                                    U[W].h = U.screen.height;
                                    U[W].j = U.innerHeight;
                                    U[W].e = U.innerWidth;
                                    U[W].l = U.location.href;
                                    U[W].r = V.referrer;
                                    U[W].k = U.screen.colorDepth;
                                    U[W].n = V.characterSet;
                                    U[W].o = (new Date).getTimezoneOffset();
                                    if (U.dataLayer)
                                          for (const bg of Object.entries(Object.entries(dataLayer).reduce(((bh, bi) => ({
                                                      ...bh[1],
                                                      ...bi[1]
                                                })), {}))) zaraz.set(bg[0], bg[1], {
                                                scope: "page"
                                          });
                                    U[W].q = [];
                                    for (; U.zaraz.q.length;) {
                                          const bj = U.zaraz.q.shift();
                                          U[W].q.push(bj)
                                    }
                                    bb.defer = !0;
                                    for (const bk of [localStorage, sessionStorage]) Object.keys(bk || {}).filter((bm => bm.startsWith("_zaraz_"))).forEach((bl => {
                                          try {
                                                U[W]["z_" + bl.slice(7)] = JSON.parse(bk.getItem(bl))
                                          } catch {
                                                U[W]["z_" + bl.slice(7)] = bk.getItem(bl)
                                          }
                                    }));
                                    bb.referrerPolicy = "origin";
                                    bb.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(U[W])));
                                    ba.parentNode.insertBefore(bb, ba)
                              };
                              ["complete", "interactive"].includes(V.readyState) ? zaraz.init() : U.addEventListener("DOMContentLoaded", zaraz.init)
                        }(w, d, "zarazData", "script");
                  })(window, document)
            } catch (e) {
                  throw fetch("/cdn-cgi/zaraz/t"), e;
            };
      </script>
</head>

<body class="hold-transition login-page">
      <div class="login-box">

            <div class="card card-outline card-primary">
                  <div class="card-header text-center">
                        <a href="../../index2.html" class="h1"><b>E-</b>Kasir</a>
                  </div>
                  <div class="card-body">
                        <p class="login-box-msg">Sign in to start your session</p>
                        <form action="../../index3.html" method="post">
                              <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email">
                                    <div class="input-group-append">
                                          <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                          </div>
                                    </div>
                              </div>
                              <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <div class="input-group-append">
                                          <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                          </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-8">
                                          <div class="icheck-primary">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">
                                                      Remember Me
                                                </label>
                                          </div>
                                    </div>

                                    <div class="col-4">
                                          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                    </div>

                              </div>
                        </form>
                        <p class="mb-1">
                              <a href="forgot-password.html">I forgot my password</a>
                        </p>
                        <p class="mb-0">
                              <a href="register.html" class="text-center">Register a new membership</a>
                        </p>
                  </div>

            </div>

      </div>


      <script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>

      <script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

      <script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>