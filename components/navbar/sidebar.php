<div class="d-flex flex-column flex-shrink-0 p-3 bg-light sidebar align-items-center justify-content-between border-end">
  
  
  <a href="<?=URL?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    <img src="assets/img/email_cabecera.png" alt="" class="img-fluid">
  </a>

  <ul class="nav nav-pills flex-column mb-auto mt-3" id="pills-tab" role="tablist">

    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
       type="button" role="tab" aria-controls="pills-home" aria-selected="true" @click="GetTitles('Dashboard')">Home
      </button>
    </li>
    
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
       type="button" role="tab" aria-controls="pills-profile" aria-selected="false" @click="GetTitles('menu 2')">Profile
      </button>
    </li>

    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
      type="button" role="tab" aria-controls="pills-contact" aria-selected="false" @click="GetTitles('menu 3')">Contact
    </button>
    </li>

  </ul>

  <div class="dropdown">
    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
      <strong>mdo</strong>
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="#">Sign out</a></li>
    </ul>
  </div>
</div>