<?php 
$day = 'wed';

switch ($day){
    case 'Mon':
        echo 'Firs day of the week';
        break;
        case 'Tue':
            case 'Wed':
                case 'Thu':
                    echo 'working day';
                    break;
                    case 'Fri':
                        echo 'Friday!';
                        break;
                        default:
                        echo 'wekend day';
}