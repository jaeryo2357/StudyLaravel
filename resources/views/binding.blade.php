<!--HTML 주석 안에서 foo를 출력합니다. -->
<ul>
@forelse ($items as $item)
 <li>{{ $item }}</li>
@empty
 <li>엥~ 아무것도 없는데요!</li>
@endforelse
</ul>
