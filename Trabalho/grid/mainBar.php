<table style="padding-right: 40px; width:100%;">
  <tr>
    <td style="border-radius:10px; background-color:#FFF; box-shadow: 2px 2px 5px #000; padding: 5px 5px 5px 5px;">
      <table style="width:680px; height:10px;" >
        <tr>
          <?php include_once('filters.php')  ?>
          <td>
            <?php include_once('sorts.php')  ?>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  
  <tr>
    <td style="border-radius:10px; background-color:#FFF; box-shadow: 2px 2px 5px #000; padding: 5px 5px 5px 5px;">
      <div id ="tasks">
        <?php getAllElements($dbh); ?>
      </div>
    </td>
  </tr>
</table>
