
<?php
use App\Models\PersonnelSalary;
$tbl = PersonnelSalary::where('PerCode',$per)->OrderBy('Priode','desc')->get();
?>

            @foreach($tbl as $list)
            <strong style="font-family:b nazanin;font-size:9px;padding-top:0px;text-align:right">  {{$list->Desc}} : {{number_format($list->Price)}} ریال </strong>
            @endforeach
    
            <script>
                function separateNum(value, input) {
                    /* seprate number input 3 number */
                    var nStr = value + '';
                    nStr = nStr.replace(/\,/g, "");
                    x = nStr.split('.');
                    x1 = x[0];
                    x2 = x.length > 1 ? '.' + x[1] : '';
                    var rgx = /(\d+)(\d{3})/;
                    while (rgx.test(x1)) {
                        x1 = x1.replace(rgx, '$1' + ',' + '$2');
                    }
                    if (input !== undefined) {

                        input.value = x1 + x2;
                    } else {
                        return x1 + x2;
                    }
                }
            </script>