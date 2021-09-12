<!doctype html>
<html lang="fa" dir="rtl">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
        <!-- Install Text Editor -->
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
              selector: '#details',
              directionality : "rtl",
              language: 'fa_IR'
            });
          </script>
        <!-- Shabnam Font CDN -->
        <link href='https://cdn.fontcdn.ir/Font/Persian/Shabnam/Shabnam.css' rel='stylesheet' type='text/css'>
        <style>
            html, body {
              font-family: Shabnam !important;
            }
        </style>
        <title>Crud Application Vue</title>
    </head>
    <body>

      <div class="container my-4">
        <div class="row">
          <div class="col-12">
            <div class="alert alert-info">
              <h4>اطلاعات کاربران</h6>
            </div>
          </div>
          <div class="col-12">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    سحرمرادی
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.                  </div>
                    </p>
                    <p>
                      <div class="">
                        <div class="card-header">
                           ویرایش اطلاعات کاربر
                        </div>
                        <div class="card-body">
                          <div class="border border-2 border-info p-3" style="border-radius: 5px;">
                            <form>
                              <div class="row">
                                <div class="mb-3 col-12 col-md-6 col-lg-4">
                                  <label for="fullName" class="form-label">نام و نام خانولدگی</label>
                                  <input type="email" class="form-control" id="fullName" aria-describedby="fullNameHelp">
                                  <div id="fullNameHelp" class="form-text text-danger">لطفا نام و نام خانوادگی را وارد نمایید.</div>
                                </div>
                                <div class="mb-3 col-12 col-md-6 col-lg-4">
                                  <label for="email" class="form-label">ایمیل</label>
                                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                  <div id="emailHelp" class="form-text text-danger">لطفا ایمیل را با فرمت درست وارد کنید.</div>
                                </div>
                                <div class="mb-3 col-12 col-md-6 col-lg-4">
                                  <label for="mobile" class="form-label">موبایل</label>
                                  <input type="text" class="form-control" id="mobile">
                                </div>
                                <div class="mb-3 col-12">
                                  <label class="form-label" for="details">توضیحات</label>
                                  <textarea id="details" class="form-control" rows="3"></textarea>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-success">ثبت</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    یاسر شریفی
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    شیرین رضوی
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
