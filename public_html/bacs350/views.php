<?php

    /*
        render_page -- build a page with custom settings
    */

//                    
    function render_page($site_title, $page_title, $content) {
        
        return '
            <!DOCTYPE html>
            <html lang="en">
                <head>

                    <meta charset="UTF-8">
                    <title>' . $page_title . '</title>

                    <link rel="icon" type="image/x-icon" href="/bacs350/favicon.ico">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
                    <link rel="stylesheet" href="/bacs350/unc.css">

                </head>
                <body>
                
                    <header>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h3>' . $site_title . '</h3>
                                    <h3>' . $page_title . '</h3>
                                </div>
                                <div class="logo col-sm-4">
                                    
                                </div>
                            </div>
                        </div>
                    </header>

                    <main>

                        ' . $content . '

                    </main>
                </body>
            </html>
        ';

    }

?>
