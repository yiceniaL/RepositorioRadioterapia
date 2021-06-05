<!DOCTYPE html>  
    <html>  
    <head>  
        <title>Bucle For de JavaScript en Estrada Web Group</title>  
    </head>  
    <body>
        <h1>¿Cuantos años tienes?</h1>
        <select>
            <?php foreach (range(1, 10) as $num): ?>
            <a>1</a>
            <?php endforeach; ?>
        </select>
    </body>  
    </html>  