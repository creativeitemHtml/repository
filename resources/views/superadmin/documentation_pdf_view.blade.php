

<?php

    use App\Models\Article;
    use App\Models\Documentation;
    
    ini_set('max_execution_time', 300);
    ini_set('set_time_limit', 300);

    foreach($topics as $topic){
        echo '<h1><b>'.$topic->topic.'</b></h1>';

        $articles = Article::where('topic_id', $topic->id)->orderBy('order', 'asc')->get();
        
        foreach($articles as $article){

            echo '<h2>'.$article->article.' - </h2>';

            echo reformat_image_path(Documentation::where('article_id', $article->id)->value('documentation'), false, true);
            
            echo '<br>';
        }
        
        echo '<br><br><br>';
    }
    
?>