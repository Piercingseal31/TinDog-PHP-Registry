<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF--8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TinDog - Admin Login</title>
    <link
      rel="icon"
      type="image/png"
      href="/assets/images/favicon-transparent.png"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="/assets/css/main.css" />
  </head>
  <body class="gradient-background d-flex flex-column min-vh-100">
    <header class="py-3 text-center">
      <a
        href="/index.html"
        class="navbar-brand fs-1 text-decoration-none"
        style="color: white"
        >tindog</a
      >
    </header>
    <main class="d-flex align-items-center justify-content-center flex-grow-1">
      <div class="tindog-card text-center" style="max-width: 450px">
        <h2 class="h3 mb-4">Administrator Login</h2>
        <form id="auth-admin-form" novalidate>
          <div
            id="login-error-alert"
            class="alert alert-danger"
            style="display: none"
          ></div>
          <div class="mb-3 text-start">
            <label for="email" class="form-label">Email address</label>
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="Enter your admin email"
              required
            />
          </div>
          <div class="mb-3 text-start">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
              <input
                type="password"
                class="form-control"
                id="password"
                placeholder="Enter your password"
                required
              />
              <button
                class="btn btn-outline-secondary password-toggle"
                type="button"
                data-target="password"
              >
                <i class="bi bi-eye-fill"></i>
              </button>
            </div>
          </div>
          <div class="d-flex justify-content-end align-items-center mb-3">
            <a
              href="/auth/admin-forgot-password.php"
              class="text-decoration-none small"
              >Forgot password?</a
            >
          </div>
          <button type="submit" class="btn btn-tindog-primary w-100 btn-lg">
            Login
          </button>
        </form>
        <hr />
        <a href="/index.html" class="text-decoration-none text-muted small"
          ><i class="bi bi-house-door me-2"></i>Back to Home</a
        >
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/lib/database.js"></script>
    <script src="/assets/js/auth/form-validator.js"></script>
    <script src="/assets/js/auth/admin.js"></script>
    <script src="/assets/js/lib/password-toggle.js"></script>
  </body>
</html>