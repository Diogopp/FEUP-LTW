<table style="padding-right: 40px; width:100%;">
  <tr>
    <td>
      <table id="sortsTable">
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
    <td id="tasksTable">
      <div id ="tasks">
        <?php getAllElements($dbh); ?>
      </div>
    </td>
  </tr>
</table>
