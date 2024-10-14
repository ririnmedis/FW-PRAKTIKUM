<a {{ $attributes}}
class="{{ request()->is('/home')? ' bg-gray-900 px-3 py-2 text-sm font-medium text-white': 'hover:bg-gray-700 hover:text-white'}}
              rounded-md" aria-current="{{request()->is('/home')? 'page' : false}}">{{$slot}}</a>