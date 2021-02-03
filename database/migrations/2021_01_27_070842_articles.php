<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Articles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('title', 25);
            $table->string('description', 250);
            $table->text('content');
            $table->string('alias', 25);
            $table->string('img', 25);
            $table->string('meta_key', 50);
            $table->string('meta_desc', 100);
            $table->timestamps();
        });
        DB::table('articles')->insert(
            array(
                'title' => 'ReactJS',
                'description' => 'A JavaScript library for building user interfaces',
                'content' => 'React makes it painless to create interactive UIs. Design simple views for each state in your application, and React will efficiently update and render just the right components when your data changes.
                Declarative views make your code more predictable and easier to debug.Build encapsulated components that manage their own state, then compose them to make complex UIs.
                Since component logic is written in JavaScript instead of templates, you can easily pass rich data through your app and keep state out of the DOM.We don’t make assumptions about the rest of your technology stack, so you can develop new features in React without rewriting existing code.
                React can also render on the server using Node and power mobile apps using React Native.',
                'alias'=>'react',
                'img'=>'react.png',
                'meta_key'=>'reactjs',
                'meta_desc'=>'reactjs framework'
            )
        );
        DB::table('articles')->insert(
            array(
                'title' => 'AngularJS',
                'description' => 'Angular is an application design framework and development platform for creating efficient and sophisticated single-page apps.',
                'content' => 'Achieve the maximum speed possible on the Web Platform today, and take it further, via Web Workers and server-side rendering.
                Angular puts you in control over scalability. Meet huge data requirements by building data models on RxJS, Immutable.js or another push-model.Build features quickly with simple, declarative templates. Extend the template language with your own components and use a wide array of existing components. Get immediate Angular-specific help and feedback with nearly every IDE and editor. All this comes together so you can focus on building amazing apps rather than trying to make the code work.',
                'alias'=>'ng',
                'img'=>'angular.png',
                'meta_key'=>'angularjs',
                'meta_desc'=>'angularjs framework'
            )
        );
        DB::table('articles')->insert(
            array(
                'title' => 'VueJS',
                'description' => 'The Progressive JavaScript Framework.',
                'content' => 'Vue  is a progressive framework for building user interfaces. Unlike other monolithic frameworks, Vue is designed from the ground up to be incrementally adoptable. The core library is focused on the view layer only, and is easy to pick up and integrate with other libraries or existing projects. On the other hand, Vue is also perfectly capable of powering sophisticated Single-Page Applications when used in combination with modern tooling and supporting libraries.',
                'alias'=>'vue',
                'img'=>'vue.png',
                'meta_key'=>'vuejs',
                'meta_desc'=>'vuejs framework'
            )
        );
        DB::table('articles')->insert(
            array(
                'title' => 'ExpressJS',
                'description' => 'Fast, unopinionated, minimalist web framework for Node.js',
                'content' => 'Express is a minimal and flexible Node.js web application framework that provides a robust set of features for web and mobile applications.With a myriad of HTTP utility methods and middleware at your disposal, creating a robust API is quick and easy.Express provides a thin layer of fundamental web application features, without obscuring Node.js features that you know and love.',
                'alias'=>'express',
                'img'=>'express.png',
                'meta_key'=>'expressjs',
                'meta_desc'=>'expressjs framework'
            )
        );
        DB::table('articles')->insert(
            array(
                'title' => 'KoaJS',
                'description' => 'Koa is a new web framework designed by the team behind Express, which aims to be a smaller, more expressive, and more robust foundation for web applications and APIs.',
                'content' => 'By leveraging async functions, Koa allows you to ditch callbacks and greatly increase error-handling. Koa does not bundle any middleware within its core, and it provides an elegant suite of methods that make writing servers fast and enjoyable.',
                'alias'=>'koa',
                'img'=>'koa.jpeg',
                'meta_key'=>'koajs',
                'meta_desc'=>'koajs framework'
            )
        );
        DB::table('articles')->insert(
            array(
                'title' => 'NodeJS',
                'description' => 'Node.js® is a JavaScript runtime built on Chrome V8 JavaScript engine.',
                'content' => 'As an asynchronous event-driven JavaScript runtime, Node.js is designed to build scalable network applications. In the following "hello world" example, many connections can be handled concurrently. Upon each connection, the callback is fired, but if there is no work to be done, Node.js will sleep.',
                'alias'=>'node',
                'img'=>'node.png',
                'meta_key'=>'nodejs',
                'meta_desc'=>'nodejs framework'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
