<?php include ('./includes/header.php'); ?>

    <!-- Main -->    
    <main>

        <!-- Login -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient" data-aos="fade">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-5 col-lg-8 col-md-9">
                        <div class="card border-0 shadow-sm p-xl-2">
                            <div class="card-body">
                                <div class="border-bottom mb-4">
                                    <h1 class="h2 text-body-emphasis">Login</h1>
                                </div>
                                <form id="loginForm">
                                    <div class="pb-4">
                                        <div class="mb-4">
                                            <label for="txtEmail" class="form-label">Email<span class="text-danger">*</span></label>
                                            <input class="form-control shadow-sm" type="text" id="txtEmail" name="username" required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="txtPassword" class="form-label">Password<span class="text-danger">*</span></label>
                                            <input class="form-control shadow-sm" id="txtPassword" name="password" type="password" required>
                                        </div>
                                        <div class="mb-6">
                                            <button class="btn btn-primary w-100" type="submit" id="btnSubmit">Login</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="alert hidden" id="errorMsg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Login -->

    </main>
    <!-- /Main -->    

<?php include ('./includes/footer.php'); ?>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#loginForm').on('submit', function (e) {
        e.preventDefault();
        const password = btoa($('#txtPassword').val());
        const username = $('#txtEmail').val();

        $.ajax({
            url: 'login_process.php',
            type: 'POST',
            data: { username: username, password: password },
            success: function (response) {
                const res = JSON.parse(response);
                if (res.status === 'success') {
                    window.location.href = res.redirectUrl;
                } else {
                    $('#errorMsg').text(res.message).removeClass('hidden');
                }
            }
        });
    });
</script>