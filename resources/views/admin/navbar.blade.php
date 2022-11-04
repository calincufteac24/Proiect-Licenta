<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-1 border-radius-xl" id="navbarBlur" navbar-scroll="true">
 <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
           
           
          </ol>
          <h6 class="font-weight-bolder mb-0">Panou administrare</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          
          </div>
          <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
           <a class="nav-link me-3" href="{{ url('/') }}">{{ __('Mergi pe site') }}</a>
              
            </li>
            <li class="nav-item d-flex align-items-center">
                <i class="fa fa-user me-sm-1"></i>
                <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconectare') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </li>
          
          
           
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
<div class="container-fluid py-4">
  
      
      </div>
    </div>