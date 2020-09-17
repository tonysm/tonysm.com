---
title: 'Kubernetes for Laravel Developers'
updated_by: 9e11e5d3-3254-4ab6-a911-96f8161b9541
updated_at: 1600355912
videos:
  -
    description: |
      ### 00 Course overview and brief introduction to Containers
      
      This is the first video of the series. I'm going to be talking about what we are going to see in this course showing some bits of the rest of the course.
    type: pending_video
    enabled: true
  -
    video: 'https://www.youtube.com/watch?v=f02rH-lRW24'
    description: |
      ### 01 Creating the Laravel application using Docker
      
      In this video, we will create our example Laravel application, but I'm assuming you have nothing but Docker installed locally (no local PHP binaries).
    type: video
    enabled: true
  -
    video: 'https://www.youtube.com/watch?v=Fv4qj3K8wSk'
    description: |
      ### 02 Local development
      
      Next, we are going to set up a development environment for our Laravel application using Docker Compose.
    type: video
    enabled: true
  -
    video: 'https://www.youtube.com/watch?v=r_9PnDWPl6s'
    description: |
      ### 03 Optimizing our Docker Image for Production
      
      In this video, we are going to make some tweaks in our application's Docker images for a better production tuning.
    type: video
    enabled: true
  -
    video: 'https://www.youtube.com/watch?v=HPf_i1a8xC0'
    description: |
      ### 04 Setting up a production environment on Kubernetes
      
      It's time to talk about our production environment. Let's discuss our options of Container Platforms and create a Kubernetes cluster on DigitalOcean.
    type: video
    enabled: true
  -
    video: 'https://www.youtube.com/watch?v=4epidR7AZP4'
    description: |
      ### 05 Deploying the Application
      
      With our cluster ready, it's time to create the manifest for our application and deploy it. We'll visualize a rolling update!
    type: video
    enabled: true
  -
    video: 'https://www.youtube.com/watch?v=wy6kXFFAum0'
    description: |
      ### 06 Configuration management and Secrets
      
      We ended up with an ugly (and not that secure) manifest files, filled with secrets in plain-text. Let's make it a bit more safe and explore the concept of Secrets in Kubernetes.
    type: video
    enabled: true
  -
    video: 'https://www.youtube.com/watch?v=exCMUEJt6DQ'
    description: |
      ### 07 Database migrations
      
      So far, we have been running migrations manually. That's not optimal. Let's automate that and discuss possible solutions.
    type: video
    enabled: true
  -
    video: 'https://www.youtube.com/watch?v=uLcAca-gDVI'
    description: |
      ### 08 CI/CD, Docker, and Kubernetes
      
      It's time to automate everything! Let's create a git repository for our infrastructure and change our application's CI to automatically patch the Kubernetes manifests whenever a new image is built.
    type: video
    enabled: true
  -
    description: |
      ### 09 Closing thoughts
      
      Time to wrap up. I'm going clean and tell what I like and what I don't like about all setup, and where I would and wouldn't use something like this.
    type: pending_video
    enabled: true
id: c0669c06-5f3c-4a2e-a7b5-b51984f0455a
---
In this video series, I'm going to show you how I wrap a Laravel application in containers to deploy it to a Kubernetes cluster.

Kubernetes can feel cumbersome at times, but it's no denying that it's a really powerful environment for your applications.

You might have heard the benefits of Containers and Kubernetes, but haven't paid close attention to yet. Some people think containers are too hard so they are not worth the effort or that Kubernetes is for microservices. **That's not true**.

I'm not gonna lie. There's quite a learning curve. But there are a lot of benefits too, like:

* Independency of host/cloud provider;
* Everything runs the same.

### Independency of host/cloud provider

Although infrastructure migrations like this a quite hard to do, using a tool like Kubernetes makes the work a bit easier. You can even have a hybrid cloud infrastructure;

### Everything runs the same

This is mostly applicable for applications that run different pieces of software. I'm not talking exclusively about microservices here. An application consists of a series of tools combined together to generate some value to either companies or customers. These tools can be microservices, but they can also be other backing services, such as load balancers, a WebSockets app your application uses, or other pieces of infrastructure like an E-mail service.

By adopting containers, you make most things "the same". So you don't have to worry about different release tools, or different build strategies for your toolings. They all of a sudden can share most infrastructure and workflows.

Anyways, I've had to deploy multiple applications to Kubernetes. Even built deployment pipelines using GitOps. So I think I have something to share with you. If you are into Containers or just want to know more about making the most out of Kubernetes for your Laravel applications, this series is for you.