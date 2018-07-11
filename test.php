<script>
	var muni_data={
		['Ballwin', 'Independent Police Force'],
		['Bella Villa', 'County (South County, Precinct 4)']
	}
</script>

<?php
function muni(){
	echo '<script type="text/javascript">',
     'var muni_data[0];',
     '</script>';
}
