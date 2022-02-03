<tbody>
          <?php foreach ($link->query('SELECT * from equipos') as $row)
          { // aca puedes hacer la consulta e iterarla con each. ?> 
          <tr>
              <td><?php echo $row['n_interno'] ?></td>
              <td><?php echo $row['patente'] ?></td>
              <td><?php echo $row['serie_gps'] ?></td>
          </tr>
          <?php
          }
          ?>
        </tbody>