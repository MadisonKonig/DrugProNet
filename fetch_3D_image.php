<html>
<head>
    <!--3D image API-->
    <link rel="stylesheet" type="text/css" href="static/mobile.css" />

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>

    <script type="text/javascript" src="js/util.js"></script>
    <script type="text/javascript" src="js/v3.js"></script>
    <script type="text/javascript" src="js/canvaswidget.js"></script>
    <script type="text/javascript" src="js/protein.js"></script>
    <script type="text/javascript" src="js/proteindisplay.js"></script>
    <script type="text/javascript" src="js/embedjolecule.js"></script>
    <script type="text/javascript" src="js/dataserver.js"></script>
    <!--3D image API end-->
    <script>
        $(document).ready(
            function() {

                // RcsbPdbDataServer('1ssx')
                // ExampleEmbededDataServer()

                register_global_animation_loop(
                    new EmbedJolecule(
                        '1bfe', // pdb_id
                        '',  // view_id
                        '#pdbimage', // html tag
                        new ExampleEmbededDataServer(), // type of data server
                        130, // height of the annotation text area
                        'Loading PDB from RCSB web-site...', // Loading msg
                        'Failed to load PDB.', // Loading failure msg
                        'Default view of PDB structure.' // Default PDB view text
                    )
                );

                register_global_animation_loop(
                    new EmbedJolecule(
                        '1bfe', // pdb_id
                        '',  // view_id
                        '#mobile-body2', // html tag
                        new ExampleEmbededDataServer(), // type of data server
                        130, // height of the annotation text area
                        'Loading PDB...', // Loading msg
                        'Failed to load PDB.', // Loading failure msg
                        'Default view of PDB structure.' // Default PDB view text
                    )
                );

            }
        );
    </script>

</head>

<body>
<div id="pdbimage" style="width:45%; height:75%; float:left; margin-right:10%;">
</div>
</body>
</html>
