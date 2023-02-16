<html>

<head>
    <meta charset="UTF-8">
    <title>Phonebook</title>
    <link rel="stylesheet" href="<?= asset('style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body class="page-body">
    <header class='page-header'>
        <div>
            <p class='logo'>Phonebook</p>
        </div>
    </header>
    <div>
        <main>
            <button type="button" class="js-insert btn btn-primary">Insert</button>

            <form class='form js-form' method="POST" action="<?= site_url('Proccess/contact.php') ?>">
                <h2 class="form-title"> Add new contact </h2>
                <input name="action" type="hidden" value="add">
                <div class="form-group">
                    <label class='form-label' for='form-link-input'>Name:</label>
                    <input name="contact_name" class='form-input form-name' type='text' required />
                </div>
                <div class="form-group">
                    <label class='form-label' for='form-link-input'>NikeName:</label>
                    <input name="surname" class='form-input form-surname' type='text' required />
                </div>
                <div class="form-group">
                    <label class='form-label' for='form-link-input'>Phone:</label>
                    <input name="contact_phone" class='form-input form-phone' type='number' required />
                </div>
                <button type="submit" class="js-submit btn btn-primary">Submit</button>
                <button type="button" class="js-cancel btn btn-danger">Cancel</button>
            </form>

            <div class='form-overlay js-form-overlay'></div>

            <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="delete-row"></th>
                            <th>Name</th>
                            <th>NikeName</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody class="contact-list">
                        <?php foreach ($contact as $obj) : ?>
                            <tr class="contact">
                                <td class="delete-row"><span class="glyphicon glyphicon-remove"></span></td>
                                <td><?= $obj['contact_name'] ?></td>
                                <td>...</td>
                                <td><?= $obj['contact_phone'] ?></td>
                                <td><button type="button" data-id="<?= $obj['id'] ?>" class="js-delete btn btn-danger">Delete</button></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script>
        $(".js-delete").click(function(e) {
            e.preventDefault;
            let btn = $(this);
            $.ajax({
                type: 'POST',
                url: '<?= site_url('Proccess/contact.php') ?>',
                data: {
                    "action": 'remove',
                    'id': btn.attr('data-id')
                },
                timeout: 500, // timeout milliseconds

                success: function(response) {
                    alert("successfully remove");
                    window.location.href = '<?= site_url('index.php') ?>'
                },
                error: function() {
                    resultbox.html('Error')
                }
            });
        })
        /**
         *	Form submit button event
         */
        $('.js-form').submit(function(e) {
            e.preventDefault();
            let form = $(this);
            let resultbox = form.find('.contact-list');
            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: form.serialize(),
                timeout: 2000,
                success: function(response) {
                    resultbox.html(response),
                        alert("Added successfully"),
                        window.location.href = '<?= site_url('index.php') ?>'
                },
                error: function() {
                    resultbox.html('Error')
                }
            })
            $('.js-form').removeClass('is-visible');
            $('.js-form-overlay').removeClass('is-visible');
        });
        $('.js-cancel').click(function(e) {
            $('.js-form').removeClass('is-visible');
            $('.js-form-overlay').removeClass('is-visible');
        })
    </script>
    <script src="index.js"></script>
</body>

</html>