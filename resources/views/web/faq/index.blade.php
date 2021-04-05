@include ('web/include/header2')


<section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-white">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FaQ</li>
                    </ol>
                </nav>

            </div>
        </div>
    </div>
  <div class="container vertical-tabs mt-3">
    <div class="row">

      <div class="col-md-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-one-tab" data-toggle="pill" href="#v-pills-one" role="tab" aria-controls="v-pills-one" aria-selected="true">Overview of Just Energy</a>
          <a class="nav-link" id="v-pills-two-tab" data-toggle="pill" href="#v-pills-two" role="tab" aria-controls="v-pills-two" aria-selected="false">Just Energy in California</a>
          <a class="nav-link" id="v-pills-three-tab" data-toggle="pill" href="#v-pills-three" role="tab" aria-controls="v-pills-three" aria-selected="false">Just Energy In Delaware</a>
        </div>
</div>
      <div class="col-md-9">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-one" role="tabpanel" aria-labelledby="v-pills-one-tab">
            <div id="accordion" role="tablist">
              <div class="card">
              <div class="input-icons">
              <i class="fas fa-search icon"></i>
                    <input class="input-field" type="search" placeholder="Search Topic Here">
                </div>
                <div class="card-header top-headline p-0" role="tab" id="headingOne">
                  <h5 class="mb-0">
                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Who is Just Energy?
                    </a>
                  </h5>
                </div>
                <div id="collapseOne" class="collapse show p-0" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    <p>Just Energy is a leading energy retailer in North America and one of the largest energy providers bringing energy solutions, natural gas and electricity to approximately 2 million customers. Our natural gas and electricity supply plans provide innovative solutions that allow our customers to choose from an array of plans to suit their lifestyle and comfort levels with market knowledge that includes secured rates, variable rates and index commodity supply programs. Just Energy also provides green energy products that provide a real and convenient solution for consumers to offset the environmental impact associated with their everyday energy use.</p>

                </div>
              </div>

            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-two" role="tabpanel" aria-labelledby="v-pills-two-tab">
            <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.
            </p>
          </div>
          <div class="tab-pane fade" id="v-pills-three" role="tabpanel" aria-labelledby="v-pills-three-tab">
            <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
















@include ('web/include/footer2')
