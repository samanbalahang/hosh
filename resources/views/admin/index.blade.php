@extends('admin/layout')


@section('info')
  <!--Main Navigation-->
 
  <!--Main Navigation-->

  <!--Main layout-->
  IMHERE
  <main style="margin-top: 58px">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>فروش</strong></h5>
          </div>
          <div class="card-body">
            <canvas class="my-4 w-100" id="myChart" height="380"></canvas>
          </div>
        </div>
      </section>
      <!-- Section: Main chart -->

      <!--Section: Sales Performance KPIs-->
      <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>عملکرد فروش</strong>
            </h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">جزیات محصول </th>
                    <th scope="col">خرید ها</th>
                    <th scope="col">کیفیت</th>
                    <th scope="col">درامد محصول</th>
                    <th scope="col">میانگین قیمت</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">مقدار</th>
                    <td>18,492</td>
                    <td>228</td>
                    <td>350</td>
                    <td>$4,787.64</td>
                    <td>$13.68</td>
                  </tr>
                  <tr>
                    <th scope="row">درصد تغییر</th>
                    <td>
                      <span class="text-danger">
                        <i class="fas fa-caret-down me-1"></i><span>-48.8%%</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>14.0%</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>46.4%</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>29.6%</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-danger">
                        <i class="fas fa-caret-down me-1"></i><span>-11.5%</span>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">تغییرات کامل</th>
                    <td>
                      <span class="text-danger">
                        <i class="fas fa-caret-down me-1"></i><span>-17,654</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>28</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>111</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>$1,092.72</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-danger">
                        <i class="fas fa-caret-down me-1"></i><span>$-1.78</span>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Sales Performance KPIs-->

      <!--Section: Minimal statistics cards-->
      <section>
         
      <!--Section: Minimal statistics cards-->

      <!--Section: Statistics with subtitles-->
      <section>
        <div class="row">
          <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="fas fa-pencil-alt text-info fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>کل محصولات</h4>
                      <p class="mb-0">Monthly blog posts</p>
                    </div>
                  </div>
                  <div class="align-self-center">
                    <h2 class="h1 mb-0">18,000</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="far fa-comment-alt text-warning fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4> کل نظرات </h4>
                      <p class="mb-0">Monthly blog posts</p>
                    </div>
                  </div>
                  <div class="align-self-center">
                    <h2 class="h1 mb-0">84,695</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <h2 class="h1 mb-0 me-4">$76,456.00</h2>
                    </div>
                    <div>
                      <h4> کل فروش </h4>
                      <p class="mb-0">Monthly Sales Amount</p>
                    </div>
                  </div>
                  <div class="align-self-center">
                    <i class="far fa-heart text-danger fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <h2 class="h1 mb-0 me-4">$36,000.00</h2>
                    </div>
                    <div>
                      <h4> مبلغ کل فروش </h4>
                      <p class="mb-0">Monthly Cost</p>
                    </div>
                  </div>
                  <div class="align-self-center">
                    <i class="fas fa-wallet text-success fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Statistics with subtitles-->
    </div>
    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
  </main>
@endsection