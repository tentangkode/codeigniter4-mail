<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Codeigniter 4 Send Email with SMTP - positronx.io</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
    .container {
        max-width: 550px;
    }
    </style>
</head>

<body>
    <div class="container mt-5">
        <form method="POST" action="<?= site_url('email') ?>">
            <div class="form-group">
                <label>Email Tujuan</label>
                <input type="text" name="email_tujuan" class="form-control">
            </div>

            <div class="form-group">
                <label>Subject</label>
                <input type="text" name="subject" class="form-control">
            </div>
            <div class="form-group">
                <label>Pesan</label>
                <textarea rows="6" type="text" name="pesan" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Kirim Email</button>
            </div>
        </form>
    </div>
</body>

</html>