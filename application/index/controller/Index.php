<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $parser = new \HyperDown\Parser;
        $html = $parser->makeHtml(file_get_contents(env('ROOT_PATH').'api-md.md'));
//        $Extra = new \Parsedown();
//        $html = $Extra->parse(file_get_contents(env('ROOT_PATH').'api-md.md'));
//        dump($html);die;
        return $this->display(
            "<html>
                        <header>
                            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                            <link href=\"https://cdn.bootcss.com/github-markdown-css/3.0.1/github-markdown.css\" rel=\"stylesheet\">
                            <style>
                                .markdown-body {
                                    box-sizing: border-box;
                                    min-width: 200px;
                                    max-width: 980px;
                                    margin: 0 auto;
                                    padding: 45px;
                                }
                            
                                @media (max-width: 767px) {
                                    .markdown-body {
                                        padding: 15px;
                                    }
                                }
                            </style>
                        </header>
                        <body class='markdown-body'>$html<body>
                     </html>"
        );


    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
