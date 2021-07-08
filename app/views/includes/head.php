<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<<<<<<< HEAD
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" hreF="<?= URLROOT;?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= URLROOT;?>/css/style.css">

  <!-- js -->
=======
  <!-- <link rel="stylesheet" href="../app/lib/bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" hreF="<?= URLROOT;?>/css/bootstrap.min.css">

>>>>>>> 4da6c69bab6385b5f99c0655f9d8dad87551c977
  <script src="<?= URLROOT; ?>/js/bootstrap.min.js"></script>
  
  <title><?= $data['judul']; ?></title>
</head>
<body>
<<<<<<< HEAD
=======
  
>>>>>>> 4da6c69bab6385b5f99c0655f9d8dad87551c977
    <div class="row d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-3">
        <a href="<?= URLROOT; ?>/index" class="ps-3 text-dark text-decoration-none">
          <strong>ShoppingSkuy</strong>
        </a>
      </div>
      <div class="col-6">
        <form class="w-100">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
      </div>
      <div class="col-3 text-end">
<<<<<<< HEAD
        <?php if(isset($_SESSION['user_id'])): ?>
          <a href="<?= URLROOT;?>/cart" class="text-decoration-none me-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="21.081" height="18.165" viewBox="0 0 21.081 18.165">
              <g id="ic-construction-coasters" transform="translate(-1.549 -3.455)">
                <path id="Path_60" data-name="Path 60" d="M3,14.18H14.36a2.29,2.29,0,0,0,2.22-1.72l1.86-7.38a1.17,1.17,0,0,1,1.13-.87h2.31" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                <line id="Line_61" data-name="Line 61" x2="1.93" y2="6.41" transform="translate(13.86 14.18)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                <path id="Path_61" data-name="Path 61" d="M3,4.21H14a1,1,0,0,1,1,1.2l-1.07,5.17a1,1,0,0,1-1,.8H4.31a1,1,0,0,1-1-.83l-1-5.61A.63.63,0,0,1,3,4.21Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                <circle id="Ellipse_22" data-name="Ellipse 22" cx="2" cy="2" r="2" transform="translate(3 16.87)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="1.5"/>
              </g>
            </svg>
          </a>
          <a href="<?= URLROOT;?>/message" class="text-decoration-none me-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="15.5" viewBox="0 0 21.5 15.5">
              <g id="ic-contact-mail" transform="translate(-1.25 -4.25)">
                <rect id="Rectangle_25" data-name="Rectangle 25" width="20" height="14" rx="2" transform="translate(2 5)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="1.5"/>
                <path id="Path_81" data-name="Path 81" d="M2.58,5.59l8.23,8.22a2,2,0,0,0,2.83,0l8-8" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd"/>
              </g>
            </svg>
          </a>
          <a href="<?= URLROOT;?>/profile" class="text-decoration-none me-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="19.843" height="21.692" viewBox="0 0 19.843 21.692">
              <g id="ic-actions-user" transform="translate(-2.078 -1.23)">
                <path id="Path_42" data-name="Path 42" d="M3,22l.79-2.88c2.61-9.5,13.81-9.5,16.42,0L21,22" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                <circle id="Ellipse_20" data-name="Ellipse 20" cx="5" cy="5" r="5" transform="translate(7 1.98)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="1.5"/>
              </g>
            </svg>
          </a>
          <a href="<?= URLROOT;?>/users/logout" class="btn btn-primary me-3">Log out</a>
        <?php else :?>
          <a href="<?= URLROOT;?>/users/login" class="btn btn-primary me-3">Sign-in</a>
        <?php endif; ?>
=======
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" class="btn btn-primary me-3">Sign-up</button>
>>>>>>> 4da6c69bab6385b5f99c0655f9d8dad87551c977
      </div>
    </div>
  