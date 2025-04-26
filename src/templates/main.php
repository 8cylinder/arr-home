<?php ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="theme-color" content="#3a3f51"/>
    <meta name="msapplication-navbutton-color" content="#3a3f51"/>
    <meta name="description" content="Media apps"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/Content/Images/Icons/apple-touch-icon.png?h=d+iS4xWxn2A2bjUwrERmSg"/>
    <link rel="icon" type="image/png" sizes="32x32" href="/Content/Images/Icons/favicon-32x32.png?h=s64FHSxrh1sgZCiBBIVikQ"/>
    <link rel="icon" type="image/png" sizes="16x16" href="/Content/Images/Icons/favicon-16x16.png?h=wksVbPqhKGB2B5P0O0h8IQ"/>
    <link rel="manifest" href="/Content/Images/Icons/manifest.json?h=/5qJyrGdXNWB0rzU5fobuA" crossorigin="use-credentials"/>
    <link rel="mask-icon" href="/Content/Images/Icons/safari-pinned-tab.svg?h=LLFuxx74TMIn3Vx2ai6a1A" color="#00ccff"/>
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>

    <title>Media apps</title>

    <% for(var i=0; i < htmlWebpackPlugin.files.css.length; i++) { %>
    <link href="<%= htmlWebpackPlugin.files.css[i] %>" rel="stylesheet">
    <% } %>

    <% for(var i=0; i < htmlWebpackPlugin.files.js.length; i++) { %>
    <script defer type="text/javascript" src="<%= htmlWebpackPlugin.files.js[i] %>"></script>
    <% } %>
  </head>

  <body class="xfont-mono bg-zinc-900">

    <section class="flex flex-col md:flex-row">

      <?php
         $pages = [
           [8080, 'qBittorrent', 'Bittorrent'],
           [7878, 'Radarr', 'Movies'],
           [8989, 'Sonarr', 'TV'],
           [8686, 'Lidarr', 'Music'],
           [8787, 'Readarr', 'Books'],
           [9696, 'Prowlarr', 'Indexer'],
           [6767, 'Bazarr', 'Subs'],
           [8096, 'Jellyfin', 'Streamer'],
           [9000, 'Portainer', 'Docker'],
         ];
      ?>
      <div class="flex flex-row md:flex-col gap-3 gap-x-7 text-sm overflow-scroll p-5">

        <?php foreach($pages as $page): ?>
          <div>
            <a class="text-zinc-100"
                href="http://beelink:<?= $page[0]; ?>/"
                target="app"
            >
              <span class="underline font-bold"><?= $page[1]; ?></span>

              <?php if($page[2]): ?>
                <span class="block md:block no-underline text-slate-400"><?= $page[2]; ?></span>
              <?php endif ?>
            </a>

          </div>
        <?php endforeach ?>

      </div>
      <iframe class="w-full h-screen" name="app" src="http://beelink:8989/wanted/missing"></iframe>

    </section>

    <script>
    // does not work because of CORS
    // add `onload="resize_iframe(this)"` to the iframe
    /*
       function resize_iframe(obj){
       obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
       console.log(obj.style.height)
       }
     */
    </script>

  </body>
</html>


