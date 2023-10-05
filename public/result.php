<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>API example</title>

    <script>
        async function fetchText(request_type, request_key) {
            const url = '/api.php',
                html_element = document.getElementById('api-result'),
                warning_element = document.getElementById('warning');

            // reset elements
            warning_element.classList.remove('d-block');
            warning_element.classList.add('d-none');
            html_element.innerHTML = '';
            warning_element.innerHTML = '';

            try {
                let fetchData = {
                    method: 'POST',
                    body: JSON.stringify({
                        'type': request_type,
                        'key': request_key
                    }),
                    headers: {'Content-Type': 'application/json; charset=UTF-8'}
                }

                let response = await fetch(url, fetchData);

                console.log(response.status); // 200
                console.log(response.statusText); // OK
                const data = await response.json();

                if (response.status !== 200) {
                    warning_element.innerHTML = data.content;
                    warning_element.classList.remove('d-none');
                    warning_element.classList.add('d-block');
                    return false;
                }

                html_element.innerHTML = data.content;

            } catch (error) {
                console.log(error);
            }
        }
    </script>
</head>
<body>


<header>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <strong>API voorbeeld</strong>
            </a>
        </div>
    </div>
</header>

<main role="main">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Dynamische content</h1>
            <p class="lead text-muted">Op deze pagina komt straks dynamische content.</p>
            <p>
                <button onclick="fetchText('fetch', 'qOxGVpvSdABWn1yG0nk6u6oI5XKN8MRe');" class="btn btn-primary my-2">Get API data, success</button>
                <br>
                <button onclick="fetchText();" class="btn btn-secondary my-2">Get API data, failed</button>
                <br>
                <button onclick="fetchText('auth', 'wrong');" class="btn btn-secondary my-2">Get API data, unauthorized</button>
                <br>
                  <!-- Nieuwe buttons -->
                <button onclick="fetchText('GET', 'qOxGVpvSdABWn1yG0nk6u6oI5XKN8MRe');" class="btn btn-primary my-2">Get API data</button>
                <br>
                <button onclick="fetchText('POST', 'qOxGVpvSdABWn1yG0nk6u6oI5XKN8MRe');" class="btn btn-success my-2">Post API data</button>
                <br>
                <button onclick="fetchText('PUT', 'qOxGVpvSdABWn1yG0nk6u6oI5XKN8MRe');" class="btn btn-warning my-2">Put API data</button>
                <br>
                <button onclick="fetchText('DELETE', 'qOxGVpvSdABWn1yG0nk6u6oI5XKN8MRe');" class="btn btn-danger my-2">Delete API data</button>
            </p>
        </div>
    </section>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning d-none" role="alert" id="warning">

                </div>

                <div class="mb-4 box-shadow">

                    <div class="border border-1 py-2 px-5" id="api-result">
                        Hier komt data
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
</body>
</html>