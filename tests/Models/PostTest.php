<?php

use PHPUnit\Framework\TestCase;

use Apteles\Acme\Models\Post;



class PostTest extends TestCase
{

    public function test_if_title_can_be_assign()
    {
        $post = new Post();
        
        $this->assertInstanceOf(Post::class, $post->setTitle('The Theory of everthing'));
        $this->assertEquals('The Theory of everthing',$post->getTitle());
        
    }

    public function test_if_title_can_be_assign_with_value_null_empty()
    {
        $post = new Post();
        
        $this->expectException(\InvalidArgumentException::class);
        
        $post->setTitle('');
    }

    public function test_if_method_return_instance_of_object_post()
    {
        $post = new Post();
         
        $title = "The Theory of everthing";
        $content = "
        Mussum Ipsum, cacilds vidis litro abertis. 
        Viva Forevis aptent taciti sociosqu ad litora 
        torquent. Todo mundo vê os porris que eu tomo, 
        mas ninguém vê os tombis que eu levo! Interagi no mé, 
        cursus quis, vehicula ac nisi. Suco de cevadiss, é um 
        leite divinis, qui tem lupuliz, matis, aguis e fermentis.
        ";

        $this->assertInstanceOf(Post::class, $post->setTitle($title));
        $this->assertInstanceOf(Post::class, $post->setContent($content));
       
    }

    public function test_if_content_can_be_assign()
    {
        $post = new Post();

        $content = "
        Mussum Ipsum, cacilds vidis litro abertis. 
        Viva Forevis aptent taciti sociosqu ad litora 
        torquent. Todo mundo vê os porris que eu tomo, 
        mas ninguém vê os tombis que eu levo! Interagi no mé, 
        cursus quis, vehicula ac nisi. Suco de cevadiss, é um 
        leite divinis, qui tem lupuliz, matis, aguis e fermentis.
        ";


        $post->setContent($content);

        $this->assertEquals($content, $post->getContent());
    }

    

    public function test_if_content_can_be_assign_with_value_null_empty()
    {
        $post = new Post();
        
        $this->expectException(\InvalidArgumentException::class);
        
        $post->setContent('');
    }

    public function test_if_date_can_be_assign()
    {
        $post = new Post();

        $post->setDate(new \DateTime());
        
        $this->assertInstanceOf(\DateTime::class, $post->getDate());

    }

    public function test_if_date_can_be_formated()
    {
        $post = new Post();

        $post->setDate(new \DateTime());
        
        $this->assertEquals('23-08-2017', $post->getDate()->format('d-m-Y'));
        
    }

    
}
