Enter file contents here
# You can use a Docker image from Docker Hub or your own container registry
image: python:3.5.1
   
pipelines:
  default:
    - step:
        script:
          - pip install -U tox
          - pip --version
          - tox --version
