<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Comisaria 2021</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <link href="/css/app.css" rel="stylesheet">

  <meta name='keywords' content="Isla aguada, Chelo Baeza" />
  <meta name='description' content="Candidatos a comisaria, Isla Aguada 2021-2024. Ejerce tu derecho al voto." />
  <meta name='subject' content="Propuestas" />
  <meta name='copyright' content="Propuestas" />
  <meta name='language' content="es" />
  <meta name="og:title" content="Propuestas" />
  <meta name="og:type" content="website" />
  <meta name="og:image" content="/images/voto-isla-aguada.jpeg" />.
  <meta name="og:url" content="{{url()->current()}}">
  <meta name="og:site_name" content="Propuestas" />
  <meta name="og:description" content="Candidatos a comisaria, Isla Aguada 2021-2024.Ejerce tu derecho al voto." />
</head>

<body>
  <x-organisms.commissioners />
</body>

</html>