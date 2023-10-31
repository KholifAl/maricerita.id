<!DOCTYPE html>
  <html lang="en">
    <head>
    <title>Login V1</title>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- <link rel="icon" type="image/png" href="css/favicon.ico" /> -->

      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
      <!-- <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"rel="stylesheet"> -->

      <link rel="stylesheet" type="text/css" href="css/animate.css">

      <link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">

      <link rel="stylesheet" type="text/css" href="css/select2.min.css">
      <!-- <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'> -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

      <link rel="stylesheet" type="text/css" href="css/util.css">
      <!-- <link rel="stylesheet" type="text/css" href="css/ccd"> -->
      <link rel="stylesheet" href="css/main.css">

      <meta name="robots" content="noindex, follow">
  </head>
        <script type="text/javascript" async="" src="/www.google-analytics.com/analytics.js" nonce="b1f58057-af27-4c75-832c-ed117fef2366"></script><script defer="" referrerpolicy="origin" src="/cdn-cgi/zaraz/s.js?z=jtdcjtiyzxhly3v0zwqlmjilm0elnuilnuqlmkmlmjj0jtiyjtnbjtiytg9naw4lmjbwmsuymiuyqyuymnglmjilm0ewljawnzu4mza1mdi1mzg2mduyncuyqyuymnclmjilm0exntm2jtjdjtiyacuymiuzqtg2ncuyqyuymmolmjilm0e3mdclmkmlmjjljtiyjtnbmtuzniuyqyuymmwlmjilm0elmjjodhrwcyuzqsuyriuyrmnvbg9ybglilmnvbsuyrmv0yyuyrmxmjtjgtg9naw5fdjelmkzpbmrlec5odg1sjtiyjtjdjtiyciuymiuzqsuymiuymiuyqyuymmslmjilm0eyncuyqyuymm4lmjilm0elmjjvveytocuymiuyqyuymm8lmjilm0etndiwjtjdjtiycsuymiuzqsu1qiu3qiuymm0lmjilm0elmjjzzxqlmjilmkmlmjjhjtiyjtnbjtvcjtiymcuymiuyqyuymmnvbmzpzyuymiuyqyu3qiuymnnjb3bljtiyjtnbjtiycgfnzsuymiu3rcu1rcu3rcuyqyu3qiuymm0lmjilm0elmjjzzxqlmjilmkmlmjjhjtiyjtnbjtvcjtiymsuymiuyqyuymlvbltizntgxnty4ltezjtiyjtjdjtdcjtiyc2nvcgulmjilm0elmjjwywdljtiyjtdejtvejtdejtvejtde"></script><script nonce="b1f58057-af27-4c75-832c-ed117fef2366">(function(w,d){!function(bb,bc,bd,be){bb[bd]=bb[bd]||{};bb[bd].executed=[];bb.zaraz={deferred:[],listeners:[]};bb.zaraz.q=[];bb.zaraz._f=function(bf){return async function(){var bg=Array.prototype.slice.call(arguments);bb.zaraz.q.push({m:bf,a:bg})}};for(const bh of["track","set","debug"])bb.zaraz[bh]=bb.zaraz._f(bh);bb.zaraz.init=()=>{var bi=bc.getElementsByTagName(be)[0],bj=bc.createElement(be),bk=bc.getElementsByTagName("title")[0];bk&&(bb[bd].t=bc.getElementsByTagName("title")[0].text);bb[bd].x=Math.random();bb[bd].w=bb.screen.width;bb[bd].h=bb.screen.height;bb[bd].j=bb.innerHeight;bb[bd].e=bb.innerWidth;bb[bd].l=bb.location.href;bb[bd].r=bc.referrer;bb[bd].k=bb.screen.colorDepth;bb[bd].n=bc.characterSet;bb[bd].o=(new Date).getTimezoneOffset();if(bb.dataLayer)for(const bo of Object.entries(Object.entries(dataLayer).reduce(((bp,bq)=>({...bp[1],...bq[1]})),{})))zaraz.set(bo[0],bo[1],{scope:"page"});bb[bd].q=[];for(;bb.zaraz.q.length;){const br=bb.zaraz.q.shift();bb[bd].q.push(br)}bj.defer=!0;for(const bs of[localStorage,sessionStorage])Object.keys(bs||{}).filter((bu=>bu.startsWith("_zaraz_"))).forEach((bt=>{try{bb[bd]["z_"+bt.slice(7)]=JSON.parse(bs.getItem(bt))}catch{bb[bd]["z_"+bt.slice(7)]=bs.getItem(bt)}}));bj.referrerPolicy="origin";bj.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bb[bd])));bi.parentNode.insertBefore(bj,bi)};["complete","interactive"].includes(bc.readyState)?zaraz.init():bb.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script>

    
  <body>
    <div class="limiter">
        <div class="container-login100">
          <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
              <img src="img-01.png" alt="IMG">
            </div>
                <form class="login100-form validate-form">
                  <span class="login100-form-title">
                    Login Akun
                  </span>

                  <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="wrap-input100 validate-input" data-validate="Password is required">
                  <input class="input100" type="password" name="pass" placeholder="Password">
                  <span class="focus-input100"></span>
                  <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                  </span>
                  </div>
                  <div class="container-login100-form-btn">
                  <button class="login100-form-btn">
                  Login
                  </button>
                  </div>

                  <div class="text-center p-t-136">
                  <a class="txt2" href="#">
                  Belum Punya Akun?
                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                  </a>
                  </div>
                </form>
            </div>
          </div>
        </div>

        <script src="js/jquery-3.2.1.min.js"></script>

        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script src="js/select2.min.js"></script>

        <script src="js/tilt.jquery.min.js"></script>
        <script>
            $('.js-tilt').tilt({
              scale: 1.1
            })
          </script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-23581568-13');
        </script>

        <script src="js/main.js"></script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"81e728e21ea51089","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
      </body>
</html>