<footer class="main-footer" style="position: fixed;right: 0;bottom: 0;left:0;z-index:10000;">
    <div class="row">
        <div class="col">
            <a class="btn btn-block" href="{{ url('/dashboard') }}"><i class="fa fas fa-home" style="{{ Request::is('dashboard*') ? 'color: blue' : '' }}"></i><br><b style="font-size: 12px; {{ Request::is('dashboard*') ? 'color: blue' : '' }}">Home</b></a>
        </div>
        <div class="col">
            <a class="btn btn-block" href="{{ url('/cuti') }}"><i class="fa fas fa-hourglass-half" style="{{ Request::is('cuti*') ? 'color: blue' : '' }}"></i><br><b style="font-size: 12px; {{ Request::is('cuti*') ? 'color: blue' : '' }}">Cuti</b></a>
        </div>
        <div class="col">
            <a class="btn btn-block" href="{{ url('/absen') }}"><i class="fa fas fa-camera" style="{{ Request::is('absen*') ? 'color: blue' : '' }}"></i><br><b style="font-size: 12px; {{ Request::is('absen*') ? 'color: blue' : '' }}">Absen</b></a>
        </div>
        <div class="col">
            <a class="btn btn-block" href="{{ url('/my-absen') }}"><i class="fa fas fa-user-secret" style="{{ Request::is('my-absen*') ? 'color: blue' : '' }}"></i><br><b style="font-size: 12px; {{ Request::is('my-absen*') ? 'color: blue' : '' }}">History</b></a>
        </div>
        <div class="col">
            <a class="btn btn-block" href="{{ url('/my-dokumen') }}"><i class="fa fas fa-folder" style="{{ Request::is('my-dokumen*') ? 'color: blue' : '' }}"></i><br><b style="font-size: 12px; {{ Request::is('my-dokumen*') ? 'color: blue' : '' }}">Document</b></a>
        </div>
    </div>
</footer>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Logout?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah anda yakin ingin logout ?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form action="{{ url('/logout') }}" method="post">
                    @csrf
                    <button class="btn btn-primary" type="submit">logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
