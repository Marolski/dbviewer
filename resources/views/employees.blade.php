<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Dodaj pracownika</h3>

            <form class="px-md-2" action="submitUser" method="post">

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" />
                <label class="form-label" for="form3Example1q">Imię</label>
              </div>
                <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" />
                <label class="form-label" for="form3Example1q">Nazwisko</label>
              </div>
                <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" />
                <label class="form-label" for="form3Example1q">Adres</label>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <input type="text" class="form-control" id="exampleDatepicker1" />
                    <label for="exampleDatepicker1" class="form-label">Pesel</label>
                  </div>
                    <div class="form-outline datepicker">
                    <input type="text" class="form-control" id="exampleDatepicker1" />
                    <label for="exampleDatepicker1" class="form-label">Telefon</label>
                  </div>
                </div>

                <div class="col-md-6 mb-4">

                <select class="select">
                  <option value="1" disabled>Class</option>
                  <option value="2">Class 1</option>
                  <option value="3">Class 2</option>
                  <option value="4">Class 3</option>
                </select>

              </div>
            </div>

              <button type="submit" class="btn btn-success btn-lg mb-1">Dodaj</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>