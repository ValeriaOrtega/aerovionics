<?php
    $conexion=mysqli_connect('localhost','root','','basewebsite') or die ('Error en la base de datos');

    $sql="INSERT INTO tablaswebsite VALUES(null,'".$_POST["nombre"]."','".$_POST["puesto"]."','".$_POST["fecha"]."',
    '".$_POST["numerodeempleado"]."','".$_POST["o1"]."','".$_POST["o2"]."','".$_POST["o3"]."','".$_POST["o4"]."'
    ,'".$_POST["o5"]."','".$_POST["o6"]."','".$_POST["o7"]."','".$_POST["o8"]."','".$_POST["o9"]."','".$_POST["o10"]."'
    ,'".$_POST["o11"]."','".$_POST["o12"]."','".$_POST["o13"]."','".$_POST["o14"]."','".$_POST["o15"]."','".$_POST["o16"]."'
    ,'".$_POST["o17"]."','".$_POST["o18"]."','".$_POST["o19"]."','".$_POST["o20"]."','".$_POST["o21"]."','".$_POST["o22"]."'
    ,'".$_POST["o23"]."','".$_POST["o24"]."','".$_POST["o25"]."','".$_POST["o26"]."','".$_POST["o27"]."','".$_POST["o28"]."'
    ,'".$_POST["o29"]."','".$_POST["o30"]."','".$_POST["o31"]."','".$_POST["o32"]."','".$_POST["o33"]."','".$_POST["o34"]."'
    ,'".$_POST["o35"]."','".$_POST["o36"]."','".$_POST["o37"]."','".$_POST["o38"]."','".$_POST["o39"]."','".$_POST["o40"]."'
    ,'".$_POST["o41"]."','".$_POST["o42"]."','".$_POST["o43"]."','".$_POST["o44"]."','".$_POST["o45"]."','".$_POST["o46"]."')";
    $resultado=mysqli_query($conexion,$sql) or die ('Error en el query');
    mysqli_close($conexion);
    echo "¡El cuestionario ha sido contestado correctamente!"

















    /*echo ("<br>");echo ("<br>");
    echo 'Nombre: '.$_POST["nombre"];
    echo ("<br>");echo ("<br>");
    echo 'Puesto: '.$_POST["puesto"];
    echo ("<br>");echo ("<br>");
    echo 'Fecha: '.$_POST["fecha"];
    echo ("<br>");echo ("<br>");
    echo 'Numero de empleado: '.$_POST["numerodeempleado"];
    echo ("<br>");echo ("<br>");
    echo '1.-Mi trabajo me exige hacer mucho esfuerzo físico: '.$_POST["o1"];
    echo ("<br>");echo ("<br>");
    echo '2.-Me preocupa sufrir un accidente en mi trabajo: '.$_POST["o2"];
    echo ("<br>");echo ("<br>");
    echo '3.-Considero que las actividades que realizo son peligrosas: '.$_POST["o3"];
    echo ("<br>");echo ("<br>");
    echo '4.-Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno: '.$_POST["o4"];
    echo ("<br>");echo ("<br>");
    echo '5.-Por la cantidad de trabajo que tengo debo trabajar sin parar: '.$_POST["o5"];
    echo ("<br>");echo ("<br>");
    echo '6.-Considero que es necesario mantener un ritmo de trabajo acelerado: '.$_POST["o6"];
    echo ("<br>");echo ("<br>");
    echo '7.-Mi trabajo exige que esté muy concentrado: '.$_POST["o7"];
    echo ("<br>");echo ("<br>");
    echo '8.-Mi trabajo requiere que memorice mucha información: '.$_POST["o8"];
    echo ("<br>");echo ("<br>");
    echo '9.-Mi trabajo exige que atienda varios asuntos al mismo tiempo: '.$_POST["o9"];
    echo ("<br>");echo ("<br>");
    echo '10.-En mi trabajo soy responsable de cosas de mucho valor: '.$_POST["o10"];
    echo ("<br>");echo ("<br>");
    echo '11.-Respondo ante mi jefe por los resultados de toda mi área de trabajo: '.$_POST["o11"];
    echo ("<br>");echo ("<br>");
    echo '12.-En mi trabajo me dan órdenes contradictorias: '.$_POST["o12"];
    echo ("<br>");echo ("<br>");
    echo '13.-Considero que en mi trabajo me piden hacer cosas innecesarias: '.$_POST["o13"];
    echo ("<br>");echo ("<br>");
    echo '14.-Trabajo horas extras más de tres veces a la semana: '.$_POST["o14"];
    echo ("<br>");echo ("<br>");
    echo '15.-Mi trabajo me exige laborar en días de descanso, festivos o fines de semana: '.$_POST["o15"];
    echo ("<br>");echo ("<br>");
    echo '16.-Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales: '.$_POST["o16"];
    echo ("<br>");echo ("<br>");
    echo '17.-Pienso en las actividades familiares o personales cuando estoy en mi trabajo: '.$_POST["o17"];
    echo ("<br>");echo ("<br>");
    echo '18.-Mi trabajo permite que desarrolle nuevas habilidades: '.$_POST["o18"];
    echo ("<br>");echo ("<br>");
    echo '19.-En mi trabajo puedo aspirar a un mejor puesto: '.$_POST["o19"];
    echo ("<br>");echo ("<br>");
    echo '20.-Durante mi jornada de trabajo puedo tomar pausas cuando las necesito: '.$_POST["o20"];
    echo ("<br>");echo ("<br>");
    echo '21.-Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo: '.$_POST["o21"];
    echo ("<br>");echo ("<br>");
    echo '22.-Puedo cambiar el orden de las actividades que realizo en mi trabajo: '.$_POST["o22"];
    echo ("<br>");echo ("<br>");
    echo '23.-Me informan con claridad cuáles son mis funciones: '.$_POST["o23"];
    echo ("<br>");echo ("<br>");
    echo '24.-Me explican claramente los resultados que debo obtener en mi trabajo: '.$_POST["o24"];
    echo ("<br>");echo ("<br>");
    echo '25.-Me informan con quién puedo resolver problemas o asuntos de trabajo: '.$_POST["o25"];
    echo ("<br>");echo ("<br>");
    echo '26.-Me permiten asistir a capacitaciones relacionadas con mi trabajo: '.$_POST["o26"];
    echo ("<br>");echo ("<br>");
    echo '27.-Recibo capacitación útil para hacer mi trabajo: '.$_POST["o27"];
    echo ("<br>");echo ("<br>");
    echo '28.-Mi jefe tiene en cuenta mis puntos de vista y opiniones: '.$_POST["o28"];
    echo ("<br>");echo ("<br>");
    echo '29.-Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo: '.$_POST["o29"];
    echo ("<br>");echo ("<br>");
    echo '30.-Puedo confiar en mis compañeros de trabajo: '.$_POST["o30"];
    echo ("<br>");echo ("<br>");
    echo '31.-Cuando tenemos que realizar trabajo de equipo los compañeros colaboran: '.$_POST["o31"];
    echo ("<br>");echo ("<br>");
    echo '32.-Mis compañeros de trabajo me ayudan cuando tengo dificultades: '.$_POST["o32"];
    echo ("<br>");echo ("<br>");
    echo '33.-En mi trabajo puedo expresarme libremente sin interrupciones: '.$_POST["o33"];
    echo ("<br>");echo ("<br>");
    echo '34.-Recibo críticas constantes a mi persona y/o trabajo: '.$_POST["o34"];
    echo ("<br>");echo ("<br>");
    echo '35.-Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones: '.$_POST["o35"];
    echo ("<br>");echo ("<br>");
    echo '36.-Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones: '.$_POST["o36"];
    echo ("<br>");echo ("<br>");
    echo '37.-Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador: '.$_POST["o37"];
    echo ("<br>");echo ("<br>");
    echo '38.-Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores: '.$_POST["o38"];
    echo ("<br>");echo ("<br>");
    echo '39.-Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo: '.$_POST["o39"];
    echo ("<br>");echo ("<br>");
    echo '40.-He presenciado actos de violencia en mi centro de trabajo: '.$_POST["o40"];
    echo ("<br>");echo ("<br>");
    echo '41.-Atiendo clientes o usuarios muy enojados: '.$_POST["o41"];
    echo ("<br>");echo ("<br>");
    echo '42.-Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas: '.$_POST["o42"];
    echo ("<br>");
    echo ("<br>");
    echo '43.-Para hacer mi trabajo debo demostrar sentimientos distintos a los míos: '.$_POST["o43"];
    echo ("<br>");echo ("<br>");
    echo '44.-Comunican tarde los asuntos de trabajo: '.$_POST["o44"];
    echo ("<br>");echo ("<br>");
    echo '45.-Dificultan el logro de los resultados del trabajo: '.$_POST["o45"];
    echo ("<br>");echo ("<br>");
    echo '46.-Ignoran las sugerencias para mejorar su trabajo: '.$_POST["o46"];
    echo ("<br>");echo ("<br>");
    */

?>