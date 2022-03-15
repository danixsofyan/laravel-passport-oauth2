<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
    @if (trim($slot) === 'Indigo')
    <img src="https://join.indigo.id/wp-content/uploads/2021/09/logo-indigo.png" style="height: 40px; width:auto;" alt="Indigo Logo">
    @else
{{ $slot }}
@endif
</a>
</td>
</tr>
