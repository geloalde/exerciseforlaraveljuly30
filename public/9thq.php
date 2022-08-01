<html>

<style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>


    <div class="flex items-center">

 <body>   
function reverse_integer($n)
{ <br>
    $result = 0;<br>
    for($i= 0; $i<32; $i++)
        {
            $result <<= 1;
            $result|= ($n & 1);
            $n >>= 1;
        }<br>
        return $result;

}   <br>
print_r(reverse_integer(1234)."\n");<br>

    </div>
    </body>
</html>