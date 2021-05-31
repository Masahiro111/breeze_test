@props([
    'message' => 'このメッセージは「alert.blade.php」の設定です',
    'type' => 'success'
])

@php
    function addClass($type){
        $result = '';
        switch($type){
            case 'success':
            $result = 'bg-green-500';
            break;

            case 'info':
            $result = 'bg-blue-500';
            break;

            case 'alert':
            $result = 'bg-red-500';
            break;
            
            case 'warning':
            $result = 'bg-yellow-500';
            break;
            
            defalut:
            $result = 'bg-green-500';
        }
        return $result;
    }
@endphp

<div {{ $attributes->merge(['class'=>"flex justify-between p-4 items-center text-white " . addClass($type) ]) }}>
    <div>{{ $message }}</div>
    <button>x</button>
</div>