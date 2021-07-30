<div id="alert">
    @if(Session::has('error'))
        <div class="fixed bg-red-200 px-5 mt-5 py-3 right-2 rounded text-center text-smx top-26 z-10" id="redAlert">
            <div class="flex font-semibold items-center space-x-5 text-red-600">
                <p> {!! session('error') !!} </p>
                <span class="border-2 border-red-400 cursor-pointer line-height-19 px-1 py-0.5 rounded-full text-red-400" id="close"><i class="fa fa-close"></i></span>
            </div>
        </div>
    @endif

    @if(Session::has('success'))
        <div class="fixed bg-green-200 mt-5 px-5 py-3 right-2 rounded text-center text-smx top-26 z-10" id="greenAlert">
            <div class="flex font-semibold items-center space-x-5 text-green-600">
                <p> {!! session('success') !!} </p>
                <span class="border-2 border-green-400 cursor-pointer line-height-19 px-1 py-0.5 rounded-full text-green-400" id="close"><i class="fa fa-close"></i></span>
            </div>
        </div>
    @endif
</div>
