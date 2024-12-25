<div class="bg-bgmain w-full md:inline-flex z-40 -mt-12 lg:mt-14 -ml-5 ">
    <div><img src="/img/mainphoto.png">
        {{View::make('Welcome/prenataldescription')}}</div>
<div class="inline-flex ">
<div class="bg-white mt-7 mb-7 pt-3 pl-4 pr-4 hover:border-2 hover:-ml-5 hover:border-bgray xl:hover:scale-125 lg:hover:scale-110 ease-in duration-500 md:block hidden md:64 xl:w-72">
<div class="inline-flex items-center">
    <a href="http://127.0.0.1:8000/cat/{{$itemca->c_id}}/parentc/{{$itemca->i_parent_id}}">
    <div><img src="{{$itemca->image_link}}" class="w-24"></div>
    <div class="inline-block pl-5">
    <div class="text-pink">€{{$itemca->price}}</div>
    <div>{{$itemca->marche}}</div></div>
    </a></div>
    <div class="text-xs">
        <div class="text-pink pt-3">Il più caro</div>
        <div class="w-64 pt-4">{{$itemca->description}}</div>
    </div>
    </div>
    <div class=" bg-white mt-7 lg:mb-7 lg:pt-3 lg:pl-4 lg:pr-4 lg:ml-6 hover:border-2 hover:-ml-5  hover:border-bgray  ease-in duration-500 hidden md:64 xl:block xl:w-72">
        <div class="inline-flex items-center">
            <a href="http://127.0.0.1:8000/cat/{{$itemec->c_id}}/parentc/{{$itemec->i_parent_id}}">
            <div><img src="{{$itemec->image_link}}" class="w-24"></div>
            <div class="inline-block pl-5">
            <div class="text-pink">€{{$itemec->price}}</div>
            <div>{{$itemec->marche}}</div></div>
            </a></div>
            <div class="text-xs">
                <div class="text-pink pt-3">Il più economico</div>
                <div class="w-64 pt-4">{{$itemec->description}}</div>
            </div>
            </div>
            <div class=" bg-white lg:mt-7 lg:mb-7 lg:pt-3 lg:pl-4 lg:pr-4 lg:ml-6 hover:-ml-5  hover:border-2 hover:-ml-5 hover:border-bgray hover:scale-125 ease-in duration-500 hidden xl:block w-72">
                <div class="inline-flex items-center">
                    <a href="http://127.0.0.1:8000/cat/{{$itemr->c_id}}/parentc/{{$itemr->i_parent_id}}">
                    <div><img src="{{$itemr->image_link}}" class="w-24"></div>
                    <div class="inline-block pl-5">
                    <div class="text-pink">€{{$itemr->price}}</div>
                    <div>{{$itemr->marche}}</div></div>
                    </a>
                </div>
                    <div class="text-xs">
                        <div class="w-64 pt-4">{{$itemr->description}}.</div>
                    </div>
                    </div>
</div>
</div> 